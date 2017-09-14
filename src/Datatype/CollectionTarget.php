<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 12.48
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class CollectionTarget extends BaseDatatype
{
    protected $_isSubobject = true;
    protected $_xmlNodeName = 'collectiontrg';
    protected $_params = array(
        'priopntime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'customer\'s ID',
            'maxLength' => '6',
        ),
        'priclotime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'secopntime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'secclotime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'availabilitytime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'pickupdate' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'pickupdays' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'pickuptime' => array(
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