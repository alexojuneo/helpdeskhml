<?php



// Define as configurações de acesso ao servidor
/*$nomeServidor = 'exalr-prd-scan';
$portaBanco   = '1521';
$usuarioServidor = 'vitor.santos';
$senhaServidor = 'Aezakmi1234';
$bancoServidor = 'dbprderp';*/

define('HOST', '192.168.1.214');
define('PORT', 1521);
define('NAME', 'dbprderp');
define('USER', 'vitor.santos');
define('PASS', 'Aezakmi1234');

$tns = "(DESCRIPTION =
            (ADDRESS_LIST =
                (ADDRESS = 
                    (PROTOCOL = TCP)
                    (HOST =" . HOST . ")
                    (PORT =" . PORT . ")         
                )
            )
            (CONNECT_DATA =
                (SERVER = DEDICATED)
                (SERVICE_NAME =" . NAME . ")                                                    
            )
        )";

// Realiza a conexão com banco de dados com tratamento de erro
try {
    $pdo = new PDO('oci:dbname='. $tns, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script type='text/javascript'>alert('Conexão realizada com sucesso!');</script>";
} catch(PDOException $e) {
    die($e->getMessage());
}
?>