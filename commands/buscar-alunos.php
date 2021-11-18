<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;


require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunoList */
$alunoList = $alunoRepository->findAll();

foreach($alunoList as $aluno){
  echo "ID {$aluno->getId()} \n Nome: {$aluno->getNome()} \n\n";
}

$nico = $alunoRepository->find(2);
echo $nico->getNome();

$bianca = $alunoRepository->findOneBy([
  'nome' => 'bianca',
]);

var_dump($bianca);