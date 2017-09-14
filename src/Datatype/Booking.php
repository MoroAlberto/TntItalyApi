<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 11.56
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class Booking extends BaseDatatype
{
    protected $_isSubobject = true;

    protected $_xmlNodeName = 'Booking';

    //public $attributes = ['action' => "I", 'international' => "N", 'cashondeliver' => "N"];

    protected $_params = array(
        'Address' => array(
            'type' => 'AddressPickup',
            'required' => true,
            'subobject' => false,
            'comment' => '',
            'maxLength' => '',
        ),
        'CollectionDetails' => array(
            'type' => 'CollectionDetails',
            'required' => false,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'Package' => array(
            'type' => 'Package',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'IsUser' => array(
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