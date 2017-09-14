<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 12.48
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class CollectionDetails extends BaseDatatype
{
    protected $_isSubobject = true;
    protected $_xmlNodeName = 'CollectionDetails';
    protected $_params = array(
        'CollectionDate' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'customer\'s ID',
            'maxLength' => '6',
        ),
        'CollectionTime' => array(
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