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
use Tnt\Datatype\Address;
use Tnt\Datatype\Addresses;
use Tnt\Datatype\CollectionTarget;
use Tnt\Datatype\Consignment;
use Tnt\Datatype\Dimensions;
use Tnt\Datatype\Security;
use Tnt\Datatype\Software;
use Tnt\Entity\Shipment;
use Tnt\Label\LabelZpl;

$config = Config::getDefault();
Config::testError();

$software = new Software();
$software->application = "MYRTL";
$software->version = "1.0";

$security = new Security();
$security->customer = $config['customer'];
$security->user = $config['user'];
$security->password = $config['password'];
$security->langid = "EN";

$consignment = new Consignment();
$consignment->attributes['action'] = 'R';
//$consignment->attributes['international'] = 'N';
$consignment->senderAccId = $config['senderAccIdItaly'];
$consignment->consignmentno = '21';//change it manual
$consignment->consignmenttype = 'C';
$consignment->actualweight = '00002000';
$consignment->actualvolume = '';//i18n
$consignment->totalpackages = '1';
$consignment->packagetype = 'C';
$consignment->division = 'D';
$consignment->product = 'A';
$consignment->reference = 'TEST';
$consignment->collectiondate = '20170515';
$consignment->termsofpayment = 'S';
$consignment->systemcode = 'RL';
$consignment->systemversion = '1.0';

$SenderAddress = new Address();
$SenderAddress->addressType = 'S';
$SenderAddress->addrline1 = 'via mittente';
$SenderAddress->postcode = '20017';
$SenderAddress->phone1 = '02';
$SenderAddress->phone2 = '12345678';
$SenderAddress->name = 'My company SRL';
$SenderAddress->country = 'IT';
$SenderAddress->town = 'RHO';
$SenderAddress->contactname = '';//i18n
$SenderAddress->province = 'MI';

$RecipientAddress = new Address();
$RecipientAddress->addressType = 'R';
$RecipientAddress->addrline1 = 'via destinatario';
$RecipientAddress->postcode = '20017';
$RecipientAddress->phone1 = '348';
$RecipientAddress->phone2 = '1234567';
$RecipientAddress->name = 'MARIO SPA';
$RecipientAddress->country = 'IT';
$RecipientAddress->town = 'RHO';
$RecipientAddress->contactname = '';//i18n
$RecipientAddress->province = 'MI';

$addresses = new Addresses();
$addresses->SenderAddress = $SenderAddress;
$addresses->RecipientAddress = $RecipientAddress;
$consignment->addresses = $addresses;

$collectionTarget = new CollectionTarget();
$collectionTarget->priopntime = '0900';
$collectionTarget->priclotime = '1200';
$collectionTarget->secopntime = '1200';
$collectionTarget->secclotime = '1800';
$collectionTarget->availabilitytime = '1000';
$collectionTarget->pickupdate = '30.05.2017';
$collectionTarget->pickupdays = '1';
$collectionTarget->pickuptime = '1000';
$consignment->collectiontrg = $collectionTarget;

$dimensions = new Dimensions();
$dimensions->itemaction = "I";
$dimensions->itemtype = 'C';
$dimensions->weight = '00002000';
$dimensions->quantity = '1';
$consignment->dimensions = $dimensions;

$shipment = new Shipment();
$shipment->software = $software;
$shipment->security = $security;
$shipment->consignment = $consignment;

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
//try {
//    $gsearch = new SoapClient("https://www.mytnt.it/ResiService/ResiServiceImpl.wsdl");
//    $result = $gsearch->__soapCall('getPDFLabel', array(array('inputXml' => $xml)));
//    $result2 = $result->getPDFLabelReturn;
//    //var_dump($result);
//    /**
//     * se voglio xml in uscita
//     */
//    header('Content-Type: application/xml');
//    echo $result2->outputString;
//    exit;
//    /**
//     * se voglio pdf
//     */
//    if ($result2->documentCorrect == 1 && strlen($result2->binaryDocument) > 0) {
//        header('Content-Type: application/pdf');
//        echo $result2->binaryDocument;
//    } else {
//        //header('Content−Type: text/xml');
//        //header('Expires: 0');
//        var_dump($result2->outputString);
//    }
//    unset($gsearch);
//} catch (SoapFault $e) {
//    header('Content−Type: text/html');
//    header('Expires: 0');
//    print_r($e);
//}
$code = $response->getStatusCode(); // 200
$body = $response->getBody();
$xml = new SimpleXMLElement($body);
if (!empty($xml->Complete->WarningMessage) || !empty($xml->Incomplete)) {
    /** xml responde */
    header('Content-Type: application/xml');
    echo $body;
    exit;
} else {
    echo $zpl = LabelZpl::createZpl($xml);
}