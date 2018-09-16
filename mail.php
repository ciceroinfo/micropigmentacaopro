<?php
header( 'Location: https://micropigmentacaopro.com.br/' ) ;
// Multiple recipients
$to = 'cicero.info@gmail.com, pamelajacsantos@gmail.com'; // note the comma

// Subject
$subject = $_POST["Subject"];

// Message
$message = '
<html>
<head>
  <title>Contato via site https://micropigmentacaopro.com.br/</title>
</head>
<body>
  <h3>Contato via site https://micropigmentacaopro.com.br/</h3>
  <p>Nome: '.$_POST["Name"].'</p>
  <p>Email: '.$_POST["Email"].'</p>
  <p>Comentário: '.$_POST["Comment"].'</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Pamela Jacqueline <pamelajacsantos@gmail.com>';
$headers[] = 'From: '.$_POST["Name"].' <'.$_POST["Email"].'>';
/*$headers[] = 'Cc: cicero.info@gmail.com';*/

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));

?>