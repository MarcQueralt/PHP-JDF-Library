<?php

include 'parameters.php'; // Include the parameters
include 'JDF/JMF.php'; // Include the JDF class

$IDP_Worker = 'http://192.168.1.40:8080/prodflow/jmf/dfe';
$IDP_Worker = 'http://192.168.1.45/dpp/jmf';


header("Content-type: text/xml; charset=utf-8");

$JMF = new JMF();

$JMF->getStatusDetailsFull();

$XML = $JMF->getXML();

$Status = $JMF->sendJMF($IDP_Worker);

print_r($Status);