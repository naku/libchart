<?php
	require_once '../common.php';

	header("Content-type: image/png");
	
	$chart = new PieChart();

	$chart->getConfig()->setShowPointCaption(false);
	
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Some part", 20));
	$dataSet->addPoint(new Point("Another part", 35));
	$dataSet->addPoint(new Point("Biggest part", 70));
	$chart->setDataSet($dataSet);

	$chart->setTitle("This is a pie");
	$chart->render();
?>