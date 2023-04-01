<?php

use App\Currency;
use App\IsoCodeEnum;

require_once('vendor/autoload.php');

$currencyInEur = Currency::make(IsoCodeEnum::EUR);
//echo $currencyInEur->isoCode()->value; // EUR

$currencyInUsd = Currency::make(IsoCodeEnum::USD);
//echo $currencyInUsd->isoCode()->value; // USD
