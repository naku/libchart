<?php
    require_once '../common.php';
    
    header("Content-type: image/png");
    
    $chart = new HorizontalBarChart(500, 170);
    
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("/wiki/Instant_messenger", 50));
    $dataSet->addPoint(new Point("/wiki/Web_Browser", 83));
    $dataSet->addPoint(new Point("/wiki/World_Wide_Web", 142));
    $chart->setDataSet($dataSet);
    
    $chart->setTitle("Most visited pages for www.example.com");
    $chart->render();
?>