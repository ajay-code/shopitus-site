<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        GetQuote.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

use DHL\Entity\AM\GetQuote;
use DHL\Datatype\AM\PieceType;
use DHL\Client\Web as WebserviceClient;

require(__DIR__ . '/../../init.php');

// DHL Settings
$dhl = $config['dhl'];

// Test a getQuote using DHL XML API
$sample = new GetQuote();
//$sample->SiteID = 'CustomerTest';
//$sample->Password = 'alkd89nBV';

$sample->SiteID = 'xmlRAAV';
$sample->Password = 'trk7ZybH8';


// Set values of the request
$sample->MessageTime = '2017-12-25T09:30:47-05:00';
$sample->MessageReference = '1234567890123456789012345678901';
$sample->BkgDetails->Date = date('Y-m-d');

$piece = new PieceType();
$piece->PieceID = 1;
$piece->Height = 10;
$piece->Depth = 5;
$piece->Width = 10;
$piece->Weight = 10;
$sample->BkgDetails->addPiece($piece);
$sample->BkgDetails->IsDutiable = 'Y';
$sample->BkgDetails->QtdShp->QtdShpExChrg->SpecialServiceType = 'WY';
$sample->BkgDetails->ReadyTime = 'PT10H21M';
$sample->BkgDetails->ReadyTimeGMTOffset = '+01:00';
$sample->BkgDetails->DimensionUnit = 'CM';
$sample->BkgDetails->WeightUnit = 'KG';
$sample->BkgDetails->PaymentCountryCode = 'US';
$sample->BkgDetails->IsDutiable = 'Y';

// Request Paperless trade
$sample->BkgDetails->QtdShp->QtdShpExChrg->SpecialServiceType = 'WY';

$sample->From->CountryCode = 'US';
$sample->From->Postalcode = '32835';
$sample->From->City = 'Orlando';

$sample->To->CountryCode = 'AU';
$sample->To->Postalcode = '2000';
$sample->To->City = 'New South Wales';
$sample->Dutiable->DeclaredValue = '10.00';
$sample->Dutiable->DeclaredCurrency = 'USD';

// Call DHL XML API
$start = microtime(true);
$sample->toXML();
$client = new WebserviceClient('staging');
$xml = $client->call($sample);
//echo PHP_EOL . 'Executed in ' . (microtime(true) - $start) . ' seconds.' . PHP_EOL;
//echo $xml . PHP_EOL;
$xml_str = simplexml_load_string($xml);
print_r($xml_str);



?>

