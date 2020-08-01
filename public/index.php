<?php


require "../vendor/autoload.php";

$shawarmaOd = new \App\ShawarmaOD();
$shawarmaBeef = new \App\ShawarmaBeef();
$shawarmaMutton = new \App\ShawarmaMutton();
$shawarmaCalc = new \App\ShawarmaCalculator();

echo $shawarmaOd->getTitle();
echo '<br>';
echo $shawarmaOd->getCost();
echo '<br>';
echo '<pre>';
echo implode(', ',$shawarmaOd->getIngredients());
echo '</pre>';
echo '<br><br><br>';
echo $shawarmaBeef->getTitle();
echo '<br>';
echo $shawarmaBeef->getCost();
echo '<br>';
echo '<pre>';
echo implode(', ',$shawarmaBeef->getIngredients());
echo '</pre>';
echo '<br><br><br>';
echo $shawarmaMutton->getTitle();
echo '<br>';
echo $shawarmaMutton->getCost();
echo '<br>';
echo '<pre>';
echo implode(', ',$shawarmaMutton->getIngredients());
echo '</pre>';
echo '<br><br><br>';
$shawarmaCalc->add($shawarmaOd);
$shawarmaCalc->add($shawarmaBeef);
$shawarmaCalc->add($shawarmaMutton);
echo $shawarmaOd->getTitle().' , '.$shawarmaBeef->getTitle().' , '.$shawarmaMutton->getTitle();
echo '<br> Цена ';
echo $shawarmaCalc->getPrice();
echo '<pre>';
echo implode(', ',$shawarmaCalc->getIngredients());
echo '</pre>';

