<?php
require_once('../config.php');
require_once(DBAPI);
$professor = null;
$customer = null;
/**
 *  Listagem de Professor
 */
function index() {
	global $professor;
	$professor = find_all('professor');
}
/**
 *  Cadastro de Professor
 */
function add() {
  if (!empty($_POST['customer'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $customer = $_POST['customer'];
    $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
    
    save('professor', $customer);
    header('location: index.php');
  }
}
/**
 *  Ediçãoo de um Professor
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['customer'])) {
      $customer = $_POST['customer'];
      $customer['modified'] = $now->format("Y-m-d H:i:s");
      update('professor', $id, $customer);
      header('location: index.php');
    } else {
      global $customer;
      $customer = find('professor', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Professor
 */
function view($id = null) {
  global $customer;
  $customer = find('professor', $id);
}

/**
 *  Exclusão de um Professor
 */
function delete($id = null) {
  global $customer;
  $customer = remove('professor', $id);
  header('location: index.php');
}