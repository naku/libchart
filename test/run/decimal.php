<?php
	require_once '../common.php';

	header("Content-type: image/png");

	$chart = new VerticalBarChart();

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Jan 2005", 1));
	$dataSet->addPoint(new Point("Feb 2005", 1));
	$dataSet->addPoint(new Point("March 2005", 1));
	$dataSet->addPoint(new Point("April 2005", 2.25));
	$dataSet->addPoint(new Point("May 2005", 3.14156265));
	$dataSet->addPoint(new Point("June 2005", 2.4));
	$dataSet->addPoint(new Point("July 2005", 1));
	$chart->setDataSet($dataSet);
	
	$chart->setTitle("Monthly usage for www.example.com");
	$chart->render();
?>