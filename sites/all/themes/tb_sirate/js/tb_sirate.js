var tb_page_top = false;
var tb_slideshow_wrapper_top = false;
var tb_social_share_top = false;

jQuery(window).load(function(){
  window.setTimeout(tb_set_equal_height, 100);
  window.setTimeout(tb_make_movable_social_share, 100);
}); 

function tb_set_equal_height() {
//	jQuery('key1, key2, key3, ...').equalHeightColumns();
  jQuery('#panel-fourth-wrapper .panel-column > .grid-inner').matchHeights();
  jQuery('#mass-bottom-wrapper .views-row.row-1 .grid-inner').matchHeights();
  jQuery('#mass-bottom-wrapper .views-row.row-2 .grid-inner').matchHeights();
  jQuery('#panel-first-wrapper .block-inner').matchHeights();
  jQuery('#panel-third-wrapper .block-inner').matchHeights();
}

function tb_make_movable_social_share() {
  if(jQuery("#page").offset()) {
    tb_page_top = jQuery("#page").offset().top;
    tb_slideshow_wrapper_top = jQuery("#slideshow-wrapper").offset() ? jQuery("#slideshow-wrapper").offset().top : jQuery("#main-wrapper").offset().top;
    tb_social_share_top = jQuery("#social-share-wrapper").offset().top;
    var div = jQuery('#header-wrapper div.container');
  
    jQuery('#social-share-wrapper').css({'left': div.width() + div.offset().left + 1 + "px"});

    tb_scroll_page();
    jQuery(window).scroll(tb_scroll_page);
    jQuery(window).resize(tb_scroll_page);
  }
}

function tb_scroll_page() {
  var current_top = jQuery(document).scrollTop();
  if(current_top + tb_page_top < tb_slideshow_wrapper_top) {
    jQuery('#social-share-wrapper').css({'top': tb_slideshow_wrapper_top + "px"});
  }
  else {
	jQuery('#social-share-wrapper').css({'top': (current_top + tb_page_top) + "px"});
  }
  var div = jQuery('#header-wrapper div.container');
  jQuery('#social-share-wrapper').css({'left': div.width() + div.offset().left + 1 + "px"});
}