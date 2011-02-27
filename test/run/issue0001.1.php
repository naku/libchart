<?php
	require_once '../common.php';

	header("Content-type: image/png");
	
	$chart = new PieChart(500, 250);

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("a (4872)", 4872));
	$dataSet->addPoint(new Point("b (4774)", 4774));
	$dataSet->addPoint(new Point("c (288)", 288));
	$dataSet->addPoint(new Point("d (18)", 18));
	$dataSet->addPoint(new Point("e (9)", 9));     
	$dataSet->addPoint(new Point("f (0)", 0));
	$dataSet->addPoint(new Point("g (0)", 0));
	
	$chart->setDataSet($dataSet);
	
	$chart->setTitle("Sales for 2006");
	$chart->render();
?>