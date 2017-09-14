<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 12.44
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class Addresses extends BaseDatatype
{
    protected $_isSubobject = true;
    protected $_xmlNodeName = 'addresses';
    protected $_params = array(
        'SenderAddress' => array(
            'type' => 'Address',
            'required' => true,
            'subobject' => true,
            'comment' => 'customer\'s ID',
            'maxLength' => '6',
        ),
        'RecipientAddress' => array(
            'type' => 'Address',
            'required' => true,
            'subobject' => true,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        /*'SupplierAddress' => array(
            'type' => 'Address',
            'required' => true,
            'subobject' => true,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),*/
    );
}