<?php

require_once __DIR__ . "/controllers/player_controller.php";
require_once __DIR__ . '/controllers/incident_controller.php';

$acao = $_GET['action'] ?? 'index';

switch ($acao) {
  case 'index':
    index();
    break;
  case 'form':
    form();
    break;
  case 'search':
    search();
    break;
  case 'player_details':
    get_player_details();
    break;
  case 'delete':
    deletePlayer();
    break;
  case 'list_incidents':
    list_incidents();
    break;
  case 'add_incident':
    go_to_add_incident();
    break;
  default:
    echo "Ação não encontrada!";
}