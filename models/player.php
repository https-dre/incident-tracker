<?php

require_once __DIR__ . "/../config/database.php";

function listPlayers() {
  $pdo = getConnection();
  $stmt = $pdo->query("SELECT * FROM players");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addPlayer($discord, $steam, $nickname) {
  $pdo = getConnection();
  $stmt = $pdo->prepare("INSERT INTO players (id_discord, id_steam, panel_nickname) VALUES (?, ?, ?)");
  return $stmt->execute([$discord, $steam, $nickname]);
}

function findPlayerBySteamId($id_steam) {
  $pdo = getConnection();
  $stmt = $pdo->prepare("SELECT * FROM players WHERE id_steam = ?");
  $stmt->execute([$id_steam]);
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function findPlayerByDiscordId($id_discord) {
  $pdo = getConnection();
  $stmt = $pdo->prepare("SELECT * FROM players WHERE id_discord = ?");
  $stmt->execute([$id_discord]);
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function findPlayerById($id) {
  $pdo = getConnection();
  $stmt = $pdo->prepare("SELECT * FROM players WHERE id = ?");
  $stmt->execute([$id]);
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function deleteById($id) {
  $pdo = getConnection();
  $stmt = $pdo->prepare('DELETE FROM players WHERE id = ?');
  return $stmt->execute([$id]);
}

function updatePlayerCoins($id, $amount) {
  $pdo = getConnection();
  $sql = "UPDATE players SET coins = ? WHERE id = ?";
  $stmt = $pdo->prepare($sql);
  return $stmt->execute([$amount, $id]);
}

function updatePlayerDemerit_Points($playerId, $new_points) {
  $pdo = getConnection();
  $sql = "UPDATE players SET demerit_points = ? WHERE id = ?";
  $stmt = $pdo->prepare($sql);
  return $stmt->execute([$new_points, $playerId]);
}