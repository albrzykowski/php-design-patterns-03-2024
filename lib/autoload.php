<?php

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className);
    
    $regularFileName = $fileName . '.php';
    $exerciseFileName = $fileName . '.exercise.php';
    $solutionFileName = $fileName . '.solution.php';
    
    if (file_exists('lib/' . $regularFileName)) {
        require $regularFileName;
        return;
    }
    /*
    if (file_exists('lib/' . $exerciseFileName)) {
        require $exerciseFileName;
        return;
    }
    */
    if (file_exists('lib/' . $solutionFileName)) {
        require $solutionFileName;
        return;
    }
}