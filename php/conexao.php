<?php

$base_dados = 'u350455626_siste';
$usuario_bd = 'u350455626_siste';
$senha_bd   = 'univas35';
$host_db    = 'localhost';
$conexao_pdo = null;
$charset = 'utf8';
 
/* Concatenação das variáveis para detalhes da classe PDO */
$detalhes_pdo = 'mysql:host=' . $host_db . ';dbname='. $base_dados.';charset='.$charset;
 
// Tenta conectar
try {
    // Cria a conexão PDO com a base de dados
    $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);    
    $conexao_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    
    // Se der algo errado, mostra o erro PDO
    print "Erro: " . $e->getMessage() . "<br/>";
	
    // Mata o script
    die();
}
?>