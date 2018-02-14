<?php
require_once('../config.php');
require_once(DBAPI);
$instituicao = null;
$customer = null;
/**
 *  Listagem de instituições
 */
function index() {
	global $instituicao;
	$instituicao = find_all('instituicao');
}
/**
 *  Cadastro de instituições
 */
function add() {
  if (!empty($_POST['customer'])) {
    
    //exit(var_dump($_POST['customer']));
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $customer = $_POST['customer'];
    $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
    
    save('instituicao', $customer);
    header('location: index.php');
  }
}
/**
 *  Edição de um instituições
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['customer'])) {
      $customer = $_POST['customer'];
      $customer['modified'] = $now->format("Y-m-d H:i:s");
      update('instituicao', $id, $customer);
      header('location: index.php');
    } else {
      global $customer;
      $customer = find('instituicao', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um instituições
 */
function view($id = null) {
  global $customer;
  $customer = find('instituicao', $id);
}

/**
 *  Exclusão de um instituições
 */
function delete($id = null) {
  global $customer;
  $customer = remove('instituicao', $id);
  header('location: index.php');
}