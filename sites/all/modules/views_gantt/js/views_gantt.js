(function ($) {
  Drupal.behaviors.views_gantt = {
    attach: function (context) {
      $('.gantt-wrapper.full')
        .hide()
        .appendTo('body')
        .css('height', $(window).height() - 50);

      gantt.config.xml_date = "%Y-%m-%d";
      gantt.config.date_scale = "%d.%m";
      gantt.config.details_on_dblclick = false;
      gantt.config.links = {"finish_to_start" : "0"};
      gantt.config.min_column_width = 50;
      gantt.config.row_height = 30;
      gantt.config.columns = [
        {name:"text", label:"Task name", tree:true, width:'*' },
      ];
      
      gantt.init("GanttDiv");
      gantt.load(ganttUrl(), "json");

      var dp = new dataProcessor(Drupal.settings.basePath + 'views_gantt/update');
      dp.init(gantt);

      gantt.attachEvent("onAfterTaskUpdate", function(id, item) {
        if (item['parent']) {
          progressUpdate(id, gantt, dp);
        }
      });   

      gantt.attachEvent("onTaskDblClick", function(id,e){
        task = gantt.getTask(id);
        if (task['parent']) {
          window.open(Drupal.settings.basePath + 'node/' + id);
        }
      });

      $('.gantt-fullscreen').live('click', function(e) {
        toggleFullScreen($(this).data('mode'));
        e.preventDefault();
      });  

      gantt.attachEvent("onBeforeLinkAdd", function(id,item){
        item.id = item.source + '_' + item.target;
      });
    }
  }

  function toggleFullScreen(active_mode) {
    disabled_mode = active_mode == 'default' ? 'full' : 'default';
    active_selector = '.gantt-wrapper.' + active_mode;
    active_id = $(active_selector).find('.gantt-div').attr('id');
    disabled_selector = '.gantt-wrapper.' + disabled_mode;
    disabled_id = $(disabled_selector).find('.gantt-div').attr('id');    

    if (active_mode == 'full') {
      $('body').addClass('views-gantt-full');
      $('body > *:not(.dhx_modal_cover):visible').addClass('views-gantt-hidden');
    } else {
      $('body').removeClass('views-gantt-full');
      $('body > *').removeClass('views-gantt-hidden');
    }
    
    $(active_selector).show();
    $(disabled_selector).hide();
    gantt.init(active_id);
  }

  function progressUpdate(id, gantt, dp) {
    task = gantt.getTask(id);

    children_hours_completed = 0;
    children = gantt.getChildren(id);
    if (children.length) {
      $.each(children, function(key, child_id) {
        child = gantt.getTask(child_id);
        progress = child.progress;
        duration = child.duration;
        hours_completed = duration * progress;
        children_hours_completed += hours_completed;
      });
      task.progress = children_hours_completed / task.duration;
      if (task.progress > 1) task.progress = 1;
      gantt.refreshTask(id);
      dp.setUpdated(id, true);
    }

    if (task['parent']) {
      progressUpdate(task['parent'], gantt, dp);
    }
  }

  function ganttUrl() {
    url = Drupal.settings.basePath + 'views_gantt/data.json?' + 
      'view=' + Drupal.settings.views_gantt.view_name + 
      '&display=' + Drupal.settings.views_gantt.display_id + 
      '&project=' + Drupal.settings.views_gantt.project_id; 

    if (Drupal.settings.views_gantt.exposed_input) {
      $.each(Drupal.settings.views_gantt.exposed_input, function(key, val) {
        if (val) {
          url += '&' + key + '=' + val;
        }
      });
    }

    return url;   
  }
})(jQuery);
