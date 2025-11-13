<?php
require_once __DIR__ . "/../models/incident.php";
require_once __DIR__ . "/../models/player.php";

function list_incidents() {
  $playerId = $_GET['playerId'];
  $player = findPlayerById($playerId);
  $incidents = listIncidentsByPlayerId($playerId);

  require __DIR__ . "/../views/list_incidents.php";
}

function go_to_add_incident() {
  $playerId = $_GET['playerId'];
  $player = findPlayerById($playerId);
  require __DIR__ . "/../views/add_incident.php";
}