<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 24/04/17
 * Time: 11.10
 */
require_once __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/../config/Config.php';

use GuzzleHttp\Client;
use Tnt\Datatype\AddressPickup;
use Tnt\Datatype\Booking;
use Tnt\Datatype\CollectionDetails;
use Tnt\Datatype\InItaly;
use Tnt\Datatype\Login;
use Tnt\Datatype\Package;
use Tnt\Entity\Document;

$configs = Config::getDefault();
Config::testError();

$login = new Login();
$login->Customer = $configs['customer'];
$login->User = $configs['user'];
$login->Password = $configs['password'];
$login->Langid = "IT";

$address = new AddressPickup();
$address->CompanyName = 'My company SRL';
$address->AddressLine1 = 'via mittente';
$address->Town = 'RHO';
$address->ProvinceState = 'MI';
$address->Postcode = '20017';
$address->ContactName = 'Mario Rossi';
$address->PhoneID1 = '02';
$address->PhoneID2 = '12345678';
$address->Email = 'mario.rossi@email.com';//i18n
$address->PriOpnTime = '1030';
$address->PriCloTime = '1300';
$address->SecOpnTime = '1400';
$address->SecCloTime = '1900';
$address->AvailabilityTime = '1000';
$address->SendEMail = 'Y';

$collectionDetails = new CollectionDetails();
$collectionDetails->CollectionDate = "14.08.2017";
$collectionDetails->CollectionTime = "1130";

$inItaly = new InItaly();
$inItaly->ItemNo = "1";
$inItaly->Weight = "1";
$inItaly->Type = "C";

$package = new Package();
$package->InItaly = $inItaly;

$booking = new Booking();
$booking->Address = $address;
$booking->CollectionDetails = $collectionDetails;
$booking->Package = $package;
$booking->IsUser = "Y";

$pickup = new Document();
$pickup->Application = "MYBOO";
$pickup->Version = "1.1";
$pickup->Login = $login;
$pickup->Booking = $booking;

/**
 * Generates the XML to be sent to TNT
 * @param \XMLWriter $xmlWriter XMl Writer instance
 * @return string
 */
$xml = $shipment->toXML();
/** for show xml create**/
/*echo $xml;
header('Content-Type: application/xml');
exit;*/

/** POST CALL **/
$client = new Client(['base_uri' => 'https://www.mytnt.it']);
$response = $client->request('POST', '/XMLServices', [
    'headers' => [
        'content-type' => 'application/xml',
        'cache-control' => 'no-cache'
    ],
    'form_params' => [
        'xmlin' => $xml
    ]
]);
/** WEBSERVICE */

