<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 10.40
 */

namespace Tnt\Entity;

use Tnt\Base;

class Document extends Base
{
    protected $_isSubobject = false;

    protected $_serviceName = 'Document';

    //protected $_serviceXSD = 'Shipment.xsd';

    //protected $_schemaVersion = '1.0';

    //protected $_displaySchemaVersion = true;

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Application' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYBOO',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYBOO',
        ),
        'Version' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'set to version 1.1',
            'minLength' => '3',
            'maxLength' => '3',
            'enumeration' => '1.1',
        ),
        'Login' => array(
            'type' => 'login',
            'required' => true,
            'subobject' => true,
        ),
        'Booking' => array(
            'type' => 'booking',
            'required' => true,
            'subobject' => true,
        ),
        'Action' => array(
            'type' => 'action',
            'required' => true,
            'subobject' => true,
        ),

    );

}