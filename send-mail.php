<?php
$email = $_POST['email'];
$message = 'Gostaria participar da lista de usuários futuros do Trutaa Digital. Meu e-mail é: ' . $email . '.';
$to = 'app@trutaa.ao';
$subject = 'Captura de Lead - Trutaa Digital';
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

echo '<script>alert("Mensagem enviada com sucesso!"); window.location.href = "index.html#cta"; </script>';

header('Location: index.html');
exit();
?>
