<?php
    require_once '../common.php';
    
    header("Content-type: image/png");
    
    $chart = new PieChart(500, 250);
    
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Mozilla Firefox (0)", 0));
    $dataSet->addPoint(new Point("Konqueror (0)", 0));
    $dataSet->addPoint(new Point("Other (0)", 0));
    $chart->setDataSet($dataSet);
    
    $chart->setTitle("User agents for www.example.com");
    $chart->render();
?>