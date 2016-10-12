<?php
/**
 * Created by PhpStorm.
 * User: wessel
 * Date: 10/12/2016
 * Time: 10:32 PM
 */
$lumpSum = $_POST['lumpSum'];
$annual =  $_POST['annual'];
$minimumInvestmentLevel = $_POST['minimumInvestmentLevel'];
$expectedMarketReturn = $_POST['expectedMarketReturn'];

$lumpSum *= (1 + $expectedMarketReturn / 100);
$months = ($lumpSum - $minimumInvestmentLevel)/ ($annual / 12);

echo htmlspecialchars($months);

