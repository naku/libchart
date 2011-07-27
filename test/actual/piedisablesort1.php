<?php
	require_once '../common.php';
	
	header("Content-type: image/png");
	
	$chart = new PieChart(500, 250);

    $chart->getConfig()->setSortDataPoint(false);
	
	$dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Item 1 (20)", 20));
    $dataSet->addPoint(new Point("Item 2 (50)", 50));
    $dataSet->addPoint(new Point("Item 3 (30)", 30));
    $dataSet->addPoint(new Point("Item 4 (70)", 70));
    $chart->setDataSet($dataSet);
	
	$chart->setTitle("This example preserves item order");
	$chart->render();
?>