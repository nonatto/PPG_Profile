<?php
require_once('../config.php');
require_once(DBAPI);
$aluno = null;
$customer = null;
/**
 *  Listagem de Alunos
 */
function index() {
  global $aluno;
  $aluno = find_all('aluno');
}
/**
 *  Cadastro de Alunos
 */
function add() {
  if (!empty($_POST['customer'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $customer = $_POST['customer'];
    $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
    
    save('aluno', $customer);
    header('location: index.php');
  }
}
/**
 *  Ediçãoo de um Aluno
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['customer'])) {
      $customer = $_POST['customer'];
      $customer['modified'] = $now->format("Y-m-d H:i:s");
      update('aluno', $id, $customer);
      header('location: index.php');
    } else {
      global $customer;
      $customer = find('aluno', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Aluno
 */
function view($id = null) {
  global $customer;
  $customer = find('aluno', $id);
}

/**
 *  Exclusão de um Aluno
 */
function delete($id = null) {
  global $customer;
  $customer = remove('aluno', $id);
  header('location: index.php');
}