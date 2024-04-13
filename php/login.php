<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password']; // This should be a hashed password

    $xml = simplexml_load_file('path_to_customer.xml');
    $found = false;

    foreach ($xml->customer as $customer) {
        if ($customer->email == $email && $customer->password == $password) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "success";
        // Start a session and set user data
        session_start();
        $_SESSION['user'] = (string) $email;
    } else {
        echo "Invalid email or password";
    }
}
?>
