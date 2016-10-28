<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['memo'])){
        file_put_contents("../html_p/memo.txt",$_POST['memo']);
    }
}

$modified = file_get_contents("../html_p/memo.txt");

// Load XML file
$xml = new DOMDocument;
$xml->load('memo.xml');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('memo.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

$proc->setParameter('', 'modified', $modified);

echo $proc->transformToXML($xml);
echo "memo.txt file is modified";

?>