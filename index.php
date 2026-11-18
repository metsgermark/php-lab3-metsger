<?php
require 'vendor/autoload.php';

use App\MagicClass;
use App\Point;
use App\Vector;


echo " Магические методы\n\n";

$obj = new MagicClass();

// __set и __get
$obj->testProp = 'Привет';
echo " __set/__get: " . $obj->testProp . "\n";

// __isset
echo " __isset (testProp существует): " . (isset($obj->testProp) ? 'да' : 'нет') . "\n";

// __unset
unset($obj->testProp);
echo " __unset (testProp удалён): " . (isset($obj->testProp) ? 'да' : 'нет') . "\n";

// __toString
echo " __toString: " . $obj . "\n";

// __invoke
$obj(42);

// __clone
$clone = clone $obj;
echo " __clone: объект клонирован\n";

// __debugInfo
echo " __debugInfo:\n";
var_dump($obj);

// __call
$obj->nonExistentMethod('аргумент');

// __callStatic
MagicClass::staticNonExistent('статический аргумент');

echo "\n";

// Геометрия 
echo " Геометрия \n\n";

// Точка T1
$T1 = new Point(3, 4);
echo "Точка T1: $T1\n";

// Вектор V1
$V1 = new Vector(3, 4);
echo "Вектор V1: $V1, длина: " . $V1->length() . "\n";

// Нулевой вектор V2
$V2 = new Vector(0, 0);
echo "Вектор V2: $V2, является нулевым: " . ($V2->isZero() ? 'да' : 'нет') . "\n";

// Вектор V3, перпендикулярный V1
// V1 = (3, 4), перпендикулярный = (-4, 3) т.к. 3*(-4) + 4*3 = -12+12 = 0
$V3 = new Vector(-4, 3);
echo "Вектор V3: $V3, длина: " . $V3->length() . "\n";

// Длины всех векторов
echo "\nДлины векторов:\n";
echo "  |V1| = " . $V1->length() . "\n";
echo "  |V2| = " . $V2->length() . "\n";
echo "  |V3| = " . $V3->length() . "\n";

// Проверка перпендикулярности V1 и V3
echo "\nV1 и V3 перпендикулярны: " . ($V1->isPerpendicularTo($V3) ? 'ДА ✓' : 'НЕТ ✗') . "\n";

// Перенос точки T1 на вектор V1
echo "\nДо переноса: T1 = $T1\n";
$T1->moveX($V1->x);
$T1->moveY($V1->y);
echo "После переноса на V1: T1 = $T1\n";