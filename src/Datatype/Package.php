<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 12.55
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class Package extends BaseDatatype
{
    protected $_isSubobject = true;
    protected $_xmlNodeName = 'Package';
    //public $itemaction = "I";
    protected $_params = array(
        'InItaly' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'customer\'s ID',
            'maxLength' => '6',
        ),
    );
}