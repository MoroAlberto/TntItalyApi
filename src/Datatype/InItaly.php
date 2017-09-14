<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 12.55
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class InItaly extends BaseDatatype
{
    protected $_isSubobject = true;
    protected $_xmlNodeName = 'InItaly';
    //public $itemaction = "I";
    protected $_params = array(
        'ItemNo' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'customer\'s ID',
            'maxLength' => '6',
        ),
        'Weight' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'Type' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
    );
}