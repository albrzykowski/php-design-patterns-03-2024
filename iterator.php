<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$repository = new Pattern\Iterator\Repository();
for ($i=0; $i<10; $i++) {
    $entity = new Pattern\Iterator\Entity(uniqid());
    $repository->addEntity($entity);
}


$repositoryIterator = new Pattern\Iterator\RepositoryIterator($repository);
foreach ($repositoryIterator as $iteration) {
    printf(
        'Current key: %d, current Entity: %s' . "\r\n" ,
        $repositoryIterator->key(),
        $repositoryIterator->current()->getName()
    );
}