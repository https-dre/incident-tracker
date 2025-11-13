<?php

require_once __DIR__ . "/../config/database.php";

function saveIncident($playerId, $title, $description, $happenedIn, $severity)
{
  $pdo = getConnection();
  $sql = "INSERT INTO incidents (playerId, title, description, happenedIn, severity) VALUES (?, ?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  return $stmt->execute(params: [$playerId, $title, $description, $happenedIn, $severity]);
}

function listIncidentsByPlayerId($playerId): array
{
  $pdo = getConnection();
  $sql = "SELECT * FROM incidents WHERE playerId = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$playerId]);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}