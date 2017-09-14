<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 15.10
 */

namespace Tnt\Entity;

use Tnt\Base;

class ShipmentResponse extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'ShipmentResponde';

    /**
     * @var string
     * Service XSD
     */
    //protected $_serviceXSD = 'BookPUResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Response' => array(
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
        ),
        'RegionCode' => array(
            'type' => 'RegionCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
        ),
        'Note' => array(
            'type' => 'Note',
            'required' => false,
            'subobject' => true,
        ),
        'ConfirmationNumber' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
            'minInclusive' => '1',
            'maxInclusive' => '999999999',
        ),
        'ReadyByTime' => array(
            'type' => 'TimeHM',
            'required' => false,
            'subobject' => false,
        ),
        'SecondReadyByTime' => array(
            'type' => 'date',
            'required' => false,
            'subobject' => false,
        ),
        'NextPickupDate' => array(
            'type' => 'Pickup',
            'required' => false,
            'subobject' => false,
        ),
        'PickupCharge' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
        ),
        'CurrencyCode' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ),
        'CallInTime' => array(
            'type' => 'TimeHM',
            'required' => false,
            'subobject' => false,
        ),
        'SecondCallInTime' => array(
            'type' => 'TimeHM',
            'required' => false,
            'subobject' => false,
        ),
        'OriginSvcArea' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minLength' => '3',
            'maxLength' => '3',
        ),
        'CountryCode' => array(
            'type' => 'CountryCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ),
    );
}