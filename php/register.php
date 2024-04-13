<?php
function generateNewId($xml) {
    $maxId = 0;
    foreach ($xml->customer as $customer) {
        $currentId = (int) $customer['id'];
        if ($currentId > $maxId) {
            $maxId = $currentId;
        }
    }
    return $maxId + 1;
}

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$firstName = $_POST['firstName'];
$surname = $_POST['surname'];

$xml = simplexml_load_file('../data/customer.xml');

// Check for existing email
foreach ($xml->customer as $customer) {
    if ($customer->email == $email) {
        echo "Email already exists.";
        exit;
    }
}

$newId = generateNewId($xml);
$customer = $xml->addChild('customer');
$customer->addAttribute('id', $newId);
$customer->addChild('firstName', $firstName);
$customer->addChild('surname', $surname);
$customer->addChild('email', $email);
$customer->addChild('password', $password);

$xml->asXML('../data/customer.xml');
echo "Registration successful!";
?>
