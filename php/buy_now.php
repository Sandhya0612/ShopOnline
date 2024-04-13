<?php
$xml = simplexml_load_file('../data/auction.xml');
$itemNumber = $_POST['itemNumber'];
$customerId = $_POST['customerId'];

foreach ($xml->item as $item) {
    if ($item['id'] == $itemNumber && $item->status == 'in_progress') {
        $item->currentBid = $item->buyNowPrice;
        $item->bidderId = $customerId;
        $item->status = 'sold';
        $xml->asXML('../data/auction.xml');
        echo "Thank you for purchasing this item.";
        exit;
    }
}

echo "This item is no longer available.";
?>
