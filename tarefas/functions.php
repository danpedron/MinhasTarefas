<?php
require_once('../config.php');
require_once(DBAPI);
$tarefas = null;
$tarefa  = null;
/**
 *  Listagem de tarefas
 */
function index() {
	global $tarefas;
	$tarefas = find_all('apontamentos');
}

/**
 *  Cadastro de tarefas
 */
function add() {
  if (!empty($_POST['tarefa'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $tarefa = $_POST['tarefa'];
    
    save('apontamentos', $tarefa);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de tarefas
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['tarefa'])) {
      $tarefa = $_POST['tarefa'];
      update('apontamentos', $id, $tarefa);
      header('location: index.php');
    } else {
      global $tarefa;
      $tarefa = find('apontamentos', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de uma tarefa
 */
function view($id = null) {
  global $tarefa;
  $tarefa = find('apontamentos', $id);
}

/**
 *  Exclusão de uma tarefa
 */
function delete($id = null) {
  global $tarefa;
  $tarefa = remove('apontamentos', $id);
  header('location: index.php');
}
