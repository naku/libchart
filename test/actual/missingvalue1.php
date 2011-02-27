<?php
	require_once '../common.php';

	header("Content-type: image/png");
	
	$chart = new PieChart(500, 250);
	
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("One (80)", 80));
	$dataSet->addPoint(new Point("Null", 0));
	$dataSet->addPoint(new Point("Two (50)", 50));
	$dataSet->addPoint(new Point("Three (70)", 70));
	$chart->setDataSet($dataSet);
	
	$chart->setTitle("User agents for www.example.com");
	$chart->render();
?>