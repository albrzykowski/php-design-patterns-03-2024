<?php
// based on http://proudtobeanengineer.blogspot.com/2012/07/wzorce-projektowe-bridge.html
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$euclideanNorm = new Pattern\Bridge\EuclideanNorm();
$manhattanNorm = new Pattern\Bridge\ManhattanNorm();
$vector2d = new Pattern\Bridge\Vector2D($euclideanNorm, 1, 1);
$vector3d = new Pattern\Bridge\Vector3D($euclideanNorm, 1, 1, 1);

echo $vector2d->calculate() . "\r\n";
echo $vector3d->calculate() . "\r\n";

$vector2d_prim = new Pattern\Bridge\Vector2D($manhattanNorm, 1, 1);
$vector3d_prim = new Pattern\Bridge\Vector3D($manhattanNorm, 1, 1, 1);

echo $vector2d_prim->calculate() . "\r\n";
echo $vector3d_prim->calculate() . "\r\n";





