<?php

require_once __DIR__ . "/../models/player.php";
require_once __DIR__ . "/../models/incident.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $playerId = $_POST['playerId'];
  $player = findPlayerById($playerId);

  if (!isset($player)) {
    echo "Player não encontrado";
    echo "<ah ref='index.php'>Voltar</a>";
  }

  $title = $_POST['title'];
  $description = $_POST['description'];
  $happenedIn = $_POST['hapennedIn'];
  $severity = $_POST['severity'];


  saveIncident($playerId, $title, $description, $happenedIn, $severity);
  updatePlayerDemerit_Points($playerId, $player['demerit_points'] + $severity);
  header("Location: ../index.php");
}