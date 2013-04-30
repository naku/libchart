<?php
    require_once '../common.php';
    
    class ThousandLabelGenerator implements LabelGenerator {
        function generateLabel($value) {
            return ((int) ($value / 1000)) . "k";
        }
    }
    
    header("Content-type: image/png");
    
    $chart = new LineChart(500, 250);
     
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Jan 2005", 27300));
    $dataSet->addPoint(new Point("Feb 2005", 32100));
    $dataSet->addPoint(new Point("March 2005", 44200));
    $dataSet->addPoint(new Point("April 2005", 71100));
    $chart->setDataSet($dataSet);
    
    $chart->setTitle("Monthly usage for www.example.com");
    $chart->getPlot()->setLabelGenerator(new ThousandLabelGenerator());
    $chart->render();
?>