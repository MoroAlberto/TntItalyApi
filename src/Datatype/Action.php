<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 11.56
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class Action extends BaseDatatype
{
    protected $_isSubobject = true;

    protected $_xmlNodeName = 'Action';

    //public $attributes = ['action' => "I", 'international' => "N", 'cashondeliver' => "N"];

    protected $_params = array(
        'Del' => array(
            'type' => 'Del',
            'required' => true,
            'subobject' => false,
            'comment' => '',
            'maxLength' => '',
        ),
    );
}