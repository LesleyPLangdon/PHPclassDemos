<?php
/* DO NOT DELETE THIS COMMENT
    To run php in codespaces
    Open terminal
    Type: php -S localhost:8000
    Hit enter
    If it does not open in browser, go to new tab and type URL http://localhost:8000/index.php
*/

$loPesos = 4870;
$loRupees = 3200;
$loFrancs = 58;

$pesoEx = .055;
$rupeeEx = .012;
$francEx = 1.1;

$fee = 1;

$pesoToUsd = $loPesos * $pesoEx;
$rupeeToUsd = $loRupees * $rupeeEx;
$francToUsd = $loFrancs * $francEx;

echo "Pesos: $loPesos\n";
echo "Rupees: $loRupees\n";
echo "Francs: $loFrancs\n\n";

echo "When I exchange my Pesos I will get: $$pesoToUsd US dollars\n";
echo "When I exchange my Rupees I will get: $$rupeeToUsd US dollars\n";
echo "When I exchange my Francs I will get: $$francToUsd US dollars\n\n";

echo "Total in US dollars after fees: $" . $pesoToUsd + $rupeeToUsd + $francToUsd - $fee * 3 . "\n\n";

/////////////////////////////////////////////////////////////////////////////////////////////////

$paMiles = 320;
$ohMiles = 280;
$inMiles = 350;

$mpg = 25;

$gasPA = 3.78;
$gasOH = 3.65;
$gasIN = 3.53;

$totalCostPA = $paMiles / $mpg * $gasPA;
$totalCostOH = $ohMiles / $mpg * $gasOH;
$totalCostIN = $inMiles / $mpg * $gasIN;

echo "It cost $$totalCostPA to drive $paMiles through Pennsylvania.\n";
echo "It cost $$totalCostOH to drive $ohMiles through Ohio.\n";
echo "It cost $$totalCostIN to drive $inMiles through Indiana.\n";




?>