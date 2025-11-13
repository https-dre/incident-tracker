<?php

function getConnection() {
  $host = "127.0.0.1";
  $db = "mvc";
  $user = "andre";
  $password = "root";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (PDOException $e) {
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
  }
}