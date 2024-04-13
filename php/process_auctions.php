<?php
$xml = simplexml_load_file('../data/auction.xml');
$currentDate = date('Y-m-d');
$currentTime = date('H:i:s');

foreach ($xml->item as $item) {
    if ($item->status == 'in_progress') {
        $endTime = strtotime($item->startDate . ' ' . $item->startTime) + $item->duration * 3600;
        if (time() > $endTime) {
            $item->status = ($item->currentBid >= $item->reservePrice) ? 'sold' : 'failed';
        }
    }
}
$xml->asXML('../data/auction.xml');
echo "Auction items have been processed.";
?>
