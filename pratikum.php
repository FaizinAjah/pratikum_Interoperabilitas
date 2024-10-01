<?php 
$url = 'https://api.exchangerate-api.com/v4/latest/USD'; // Ganti dengan URL yang sesuai
$response = file_get_contents($url);

if ($response === FALSE) {
    die('Error wee.'); 
}

$data = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error: Invalid JSON format.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KANG SERVIS</title>
</head>
<body> 
    <h1>KANG SERVIS</h1>
    <p>USD : <?php echo $data['rates']['USD']; ?></p>
    
    <?php if (isset($data['rates']['GBP'])): ?>
        <p>GBP : <?php echo $data['rates']['GBP']; ?></p>
    <?php else: ?>
        <p>GBP: Data tidak tersedia.</p>
    <?php endif; ?>

    <?php if (isset($data['rates']['EUR'])): ?>
        <p>EUR : <?php echo $data['rates']['EUR']; ?></p>
    <?php else: ?>
        <p>EUR: Data tidak tersedia.</p>
    <?php endif; ?>
</body>
</html>
