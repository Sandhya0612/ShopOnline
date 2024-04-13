<?php
// Load the auction data
$xml = simplexml_load_file('../data/auction.xml');
$itemNumber = $_POST['itemNumber'];
$newBid = $_POST['bid'];
$customerId = $_POST['customerId'];

foreach ($xml->item as $item) {
    if ($item['id'] == $itemNumber && $item->status == 'in_progress' && $newBid > $item->currentBid) {
        $item->currentBid = $newBid;
        $item->bidderId = $customerId;
        $xml->asXML('../data/auction.xml');
        echo "Thank you! Your bid is recorded in ShopOnline.";
        exit;
    }
}

echo "Sorry, your bid is not valid.";
?>
