<?php
require 'calculateService.php';

$salary = $_GET['salary'];
$calculateINSS = 0.0;
$calculateIRPF = 0.0;
$calculateResult = 0.0;

if(is_numeric($salary)){
    $calculateINSS = calculateService::calculateINSS($salary);
    $calculateIRPF = calculateService::calculateIRPF($salary - $calculateINSS);
    $calculateResult = calculateService::calculateSalary(($salary - $calculateINSS) - $calculateIRPF);
}

echo $calculateINSS;
echo $calculateIRPF;
echo $calculateResult;
?>