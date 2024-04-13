<?php
$xml = simplexml_load_file('../data/auction.xml');
$xsl = new DOMDocument;
$xsl->load('../xslt/report.xslt');

$proc = new XSLTProcessor();
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);
?>
