<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 08/05/17
 * Time: 15.11
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class Security extends BaseDatatype
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    protected $_xmlNodeName = 'security';
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'customer' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'customer\'s ID',
            'maxLength' => '6',
        ),
        'user' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'user\'s ID',
            'maxLength' => '12',
        ),
        'password' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Authenticates the sender of the message',
            'maxLength' => '20',
        ),
        'langid' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'IT italian, EN english',
            'maxLength' => '2',
            'enumeration' => 'IT,EN',
        ),
    );
}