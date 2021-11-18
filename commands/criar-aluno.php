<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

// Deini um nome do aluno
$aluno = new Aluno();
$aluno->setNome($argv[1]);

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


for($i =2; $i < $argc; $i++){
  $numeroTelefone = $argv[$i];
  $telefone = new Telefone();
  $telefone->setNumero($numeroTelefone);

  $entityManager->persist($telefone);

  $aluno->addTelefone($telefone);
}


// persist mapeia todas as alterações em memória
$entityManager->persist($aluno);

//flush envia todas as alteracoes que o persist mapeou e envia tudo de uma só 
//vez ao banco, otimizando (e muito) a performance da aplicação.
$entityManager->flush();