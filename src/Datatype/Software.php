<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 08/05/17
 * Time: 14.57
 */

namespace Tnt\Datatype;

use Tnt\BaseDatatype;

class Software extends BaseDatatype
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    protected $_xmlNodeName = 'software';
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'application' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'MYRTL=national, MYRTLI=i18n',
            'minLength' => '5',
            'maxLength' => '6',
            'enumeration' => 'MYRTL, MYRTLI',
        ),
        'version' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'set to version 1.0',
            'minLength' => '3',
            'maxLength' => '3',
            'enumeration' => '1.0',
        ),
    );
}