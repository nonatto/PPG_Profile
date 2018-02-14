<?php
require_once('../config.php');
require_once(DBAPI);
$departamento = null;
$customer = null;
/**
 *  Listagem de departamentos
 */
function index() {
	global $departamento;
	$departamento = find_all('departamento');
}
/**
 *  Cadastro de departamentos
 */
function add() {
  if (!empty($_POST['customer'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $customer = $_POST['customer'];
    $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
    
    save('departamento', $customer);
    header('location: index.php');
  }
}
/**
 *  Edição de um departamentos
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['customer'])) {
      $customer = $_POST['customer'];
      $customer['modified'] = $now->format("Y-m-d H:i:s");
      update('departamento', $id, $customer);
      header('location: index.php');
    } else {
      global $customer;
      $customer = find('departamento', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um departamentos
 */
function view($id = null) {
  global $customer;
  $customer = find('departamento', $id);
}

/**
 *  Exclusão de um departamentos
 */
function delete($id = null) {
  global $customer;
  $customer = remove('departamento', $id);
  header('location: index.php');
}