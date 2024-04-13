<?php
$itemName = $_POST['itemName'];
$category = $_POST['category'];
$description = $_POST['description'];
$reservePrice = $_POST['reservePrice'];
$buyNowPrice = $_POST['buyNowPrice'];
$startPrice = $_POST['startPrice'];

$xml = simplexml_load_file('../data/auction.xml');
$newId = generateNewId($xml);  // Function not shown, similar to registration

$item = $xml->addChild('item');
$item->addAttribute('id', $newId);
$item->addChild('name', $itemName);
$item->addChild('category', $category);
$item->addChild('description', $description);
$item->addChild('reservePrice', $reservePrice);
$item->addChild('buyNowPrice', $buyNowPrice);
$item->addChild('startPrice', $startPrice);
$item->addChild('status', 'in_progress');

$xml->asXML('../data/auction.xml');
echo "Item listed successfully with ID: $newId";
?>
