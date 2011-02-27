<?php
	require_once '../common.php';

	header("Content-type: image/png");
	
	$chart = new LineChart();

#	$chart->addPoint(new Point("06-01", 0));
#	$chart->addPoint(new Point("06-02", 10));

	$chart->setTitle("Sales for 2006");
	$chart->render();
?>