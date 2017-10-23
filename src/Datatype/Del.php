<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 11.56
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class Del extends BaseDatatype
{
    protected $_isSubobject = true;

    protected $_xmlNodeName = 'Del';

    //public $attributes = ['action' => "I", 'international' => "N", 'cashondeliver' => "N"];

    protected $_params = array(
        'BookingNumber' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => '',
            'maxLength' => '',
        ),
    );
}