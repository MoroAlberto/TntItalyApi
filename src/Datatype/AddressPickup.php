<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 12.33
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class AddressPickup extends BaseDatatype
{
    public $postcode;
    protected $_isSubobject = true;
    protected $_xmlNodeName = 'Address';
    protected $_params = array(
        'CompanyName' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'customer\'s ID',
            'maxLength' => '6',
        ),
        'AddressLine1' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'Town' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'ProvinceState' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'Postcode' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '6',
            'maxLength' => '7',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'ContactName' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'PhoneID1' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'PhoneID2' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'Email' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'PriOpnTime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'PriCloTime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'SecOpnTime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'SecCloTime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'AvailabilityTime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'SendEMail' => array(
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