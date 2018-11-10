<center>
<?php
error_reporting(0);
require '../vendor/autoload.php';
use jokodm\Datamining\Klasifikasi\KNearestNeighbors;
use jokodm\Datamining\Dataset\Demo\BreastCancer;


$dataset = new BreastCancer();


$dataClass = $dataset->getTargets();

echo $dataClass;


