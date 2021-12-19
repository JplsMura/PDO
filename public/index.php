<?php

$dsn        = 'mysql'; // DSN o Driver de Conexão
$host       = '172.28.0.1'; // Localhost ou o Container do DOCKER
$database   = 'curso_php_pdo'; // O Banco de dados ao qual vou me conectar
$port       = 3392; // PORTA de conexão, caso eu não passe ele pega a padrão 3306
$user       = 'root'; // O User ao qual vou usar na conexão
$password   = 'root'; // A Senha ao qual vou usar na conexão

try {

    // Instância do PDO, com DSN, HOST, PORT, DATABASE, USER e PASSWORD
    $pdo = new PDO("{$dsn}:host={$host};port={$port};dbname={$database}", $user, $password);

    // Gera erros caso aconteça algum, o erro é atribuido a variavel que está instânciando a class PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $name = 'Teste';
    $description = 'Teste';

    // INSERT de Registo
    // $sql = "INSERT INTO products (name, description) VALUES ('{$name}', '{$description}')";
    // $insert = $pdo->exec($sql);
    // var_dump($insert);

    // UPDATE de registro
    // $update = $pdo->exec("UPDATE products SET name='{$name}', description='{$description}' WHERE id=1");
    // var_dump($update);

} catch (Throwable | PDOException $e) {
    echo $e->getCode().'<br>'; // Pega o código da execeção
    echo $e->getMessage(); // Pega a mensagem de erro
}
