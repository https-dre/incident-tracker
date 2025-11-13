<?php
require_once __DIR__ . "/../models/player.php";

function index()
{
  $players = listPlayers();
  require __DIR__ . "/../views/list_players.php";
}

function form()
{
  require __DIR__ . "/../views/add_player.php";
}

function save_player()
{
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nick = $_POST["nickname"];
    $id_steam = $_POST["id_steam"];
    $id_discord = $_POST["id_discord"];
    addPlayer($id_discord, $id_steam, $nick);
    echo "Player registrado.";
    header("Location: index.php");
    exit();
  }
}

function search()
{
  require __DIR__ . "/../views/search.php";
}

function deletePlayer(): never
{
  $id = $_GET['id'];
  $player = findPlayerById($id);
  if ($player) {
    deleteById($player['id']);
  }
  header("Location: index.php");
  exit();
}

function get_player_details()
{
  $result = null;
  $term = '';
  $field = 'id';

  if (isset($_GET['search_field']) and !empty($_GET['search_term'])) {
    $field = $_GET['search_field'];
    $term = $_GET['search_term'];
  }

  switch ($field) {
    case 'steam':
      $result = findPlayerBySteamId($term);
      break;
    case 'discord':
      $result = findPlayerByDiscordId($term);
      break;
    case 'id':
      $result = findPlayerById($term);
      break;
    default:
      require_once __DIR__ . "/../index.php";
  }

  require __DIR__ . "/../views/player_details.php";
}
