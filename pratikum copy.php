<?php
$url = 'http://api.coindesk.com/v1/bpi/currentprice.json';
$response = file_get_contents($url); 

if ($response === FALSE) {
    die('Error: Tidak dapat mengambil data dari URL.');
}

$data = json_decode($response, true);
// print_r($data);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'
      SERVIS
    </title>
  </head>
  <body> 
    <h1>
      SERVIS
    </h1>
    <p>USD : <?php echo $data ['bpi']['USD']['rate']; ?></p>
    <p>GBP : <?php echo $data ['bpi']['GBP']['rate']; ?></p>
    <p>EUR : <?php echo $data ['bpi']['EUR']['rate']; ?></p>
  </body>
</html>