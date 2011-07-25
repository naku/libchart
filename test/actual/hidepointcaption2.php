<?php
	require_once '../common.php';
	
	header("Content-type: image/png");
	
	$chart = new HorizontalBarChart(500, 250);
	
	$chart->getConfig()->setShowPointCaption(false);
	
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Jan 2005", 273));
	$dataSet->addPoint(new Point("Feb 2005", 321));
	$dataSet->addPoint(new Point("Mar 2005", 442));
	$dataSet->addPoint(new Point("Apr 2005", 711));
	$chart->setDataSet($dataSet);
	
	$chart->setTitle("Monthly usage for www.example.com");
	$chart->render();
?>
