<?php
/**
 * @file
 * Defines the templated used to produce the the Gantt Chart
 */
?>
<?php
	$height = isset($view->style_options['height']) && $view->style_options['height'] ? $view->style_options['height'] : '300';
	$style = "style='height:{$height}px; width: 100%;'";
?>
<div class="gantt-wrapper default">
	<div <?php print $style; ?> id="GanttDiv" class="gantt-div">
	</div>	
	<a class="gantt-fullscreen" data-mode="full">Fullscreen</a>
</div>
<div class="gantt-wrapper full">
	<div id="GanttDivFullscreen" class="gantt-div">
	</div>	
	<a class="gantt-fullscreen" data-mode="default">Exit Fullscreen</a>
</div>
