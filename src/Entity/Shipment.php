<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 10.40
 */

namespace Tnt\Entity;

use Tnt\Base;

class Shipment extends Base
{
    protected $_isSubobject = false;

    protected $_serviceName = 'shipment';

    //protected $_serviceXSD = 'Shipment.xsd';

    //protected $_schemaVersion = '1.0';

    //protected $_displaySchemaVersion = true;

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'software' => array(
            'type' => 'software',
            'required' => true,
            'subobject' => true,
        ),
        'security' => array(
            'type' => 'security',
            'required' => true,
            'subobject' => true,
        ),
        'consignment' => array(
            'type' => 'consignment',
            'required' => true,
            'subobject' => true,
        ),

    );

}