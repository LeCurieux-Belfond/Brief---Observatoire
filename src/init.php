<?php


function classLoader($className)
{

    $filePathClass = $className . '.php';

    $folderPathClasses = __DIR__ . '/Classes/';
    $folderPathModels = __DIR__ . '/Models/';
    $folderPathRepositories = __DIR__ . '/Repositories/';
    $folderHomeController = __DIR__ . '/Controller/';

    if (file_exists($folderPathClasses . $filePathClass)) {
        require $folderPathClasses . $filePathClass;
    }


    if (file_exists($folderPathModels . $filePathClass)) {
        require $folderPathModels . $filePathClass;
    }


    if (file_exists($folderPathRepositories . $filePathClass)) {
        require $folderPathRepositories . $filePathClass;
    }

    if (file_exists($folderHomeController . $filePathClass)) {
        require $folderHomeController . $filePathClass;
    }



    

}

spl_autoload_register('classLoader');


    session_start();


    $database = new Db();


    $database->getDb();


    require_once __DIR__ . '/router.php';