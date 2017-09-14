<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 08/05/17
 * Time: 15.11
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class Login extends BaseDatatype
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    protected $_xmlNodeName = 'Login';
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'Customer' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'customer\'s ID',
            'maxLength' => '6',
        ),
        'User' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'user\'s ID',
            'maxLength' => '12',
        ),
        'Password' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Authenticates the sender of the message',
            'maxLength' => '20',
        ),
        'Langid' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'IT italian, EN english',
            'maxLength' => '2',
            'enumeration' => 'IT,EN',
        ),
    );
}