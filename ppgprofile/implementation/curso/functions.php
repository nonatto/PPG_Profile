<?php
require_once('../config.php');
require_once(DBAPI);
$curso = null;
$customer = null;
/**
 *  Listagem de cursos
 */
function index() {
	global $curso;
	$curso = find_all('curso');
}
/**
 *  Cadastro de cursos
 */
function add() {
  if (!empty($_POST['customer'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $customer = $_POST['customer'];
    $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
    
    save('curso', $customer);
    header('location: index.php');
  }
}
/**
 *  Ediçãoo de um curso
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['customer'])) {
      $customer = $_POST['customer'];
      $customer['modified'] = $now->format("Y-m-d H:i:s");
      update('curso', $id, $customer);
      header('location: index.php');
    } else {
      global $customer;
      $customer = find('curso', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um curso
 */
function view($id = null) {
  global $customer;
  $customer = find('curso', $id);
}

/**
 *  Exclusão de um curso
 */
function delete($id = null) {
  global $customer;
  $customer = remove('curso', $id);
  header('location: index.php');
}