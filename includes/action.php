<?php
session_start();
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      
      $apiKey = '83324b7430f6fc5b900a2076242bbbec-us17';
      $listID = '473eca9955';

      $memberID = md5(strtolower($email));
      $datacenter = substr($apiKey, strpos($apiKey, '_')+1);
      $url = 'https://'. $datacenter . 'api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;

      //member information
      $json = json_encode([
        'email_address' => $email,
        'status'        => 'subscribed',
      ]);


      //send http post request with url
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
      curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $json);


  }
}


?>