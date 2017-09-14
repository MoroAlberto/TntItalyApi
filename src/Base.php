<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 08/05/17
 * Time: 15.28
 */

namespace Tnt;

class Base extends BaseDatatype
{
    protected $_bodyParams = array();

    protected $_serviceName = null;

    //protected $_serviceXSD = null;

    protected $_isSubobject = null;

    //protected $_schemaVersion = '1.0';

    //protected $_displaySchemaVersion = false;

    protected $_xmlNodeName = null;
    protected $action = "I";

    //const DHL_REQ = 'http://www.mytnt.it';
    //const DHL_XSI = 'http://www.w3.org/2001/XMLSchema-instance';

    //protected $_headerParams = array();

    public function toXML(\XMLWriter $xmlWriter = null)
    {
        //$this->validateParameters();

        $xmlWriter = new \XMLWriter();
        $xmlWriter->openMemory();
        $xmlWriter->setIndent(true);
        $xmlWriter->startDocument('1.0', 'ISO-8859-1', 'no');

        $xmlWriter->startElement($this->_serviceName);
        /*if ($this->_displaySchemaVersion)
        {
            $xmlWriter->writeAttribute('schemaVersion', $this->_schemaVersion);
        }*/

        if (null !== $this->_xmlNodeName) {
            $xmlWriter->startElement($this->_xmlNodeName);
        }
        /*foreach ($this->_headerParams as $name => $infos)
        {
            $xmlWriter->writeElement($name, $this->$name);
        }*/

        foreach ($this->_bodyParams as $name => $infos) {
            if ($this->$name) {
                if (is_object($this->$name)) {
                    $this->$name->toXML($xmlWriter);
                } elseif (is_array($this->$name)) {
                    if ('string' == $this->_params[$name]['type']) {
                        foreach ($this->$name as $subelement) {
                            $xmlWriter->writeElement($name, $subelement);
                        }
                    } else {
                        if (!isset($this->_params[$name]['disableParentNode']) || false == $this->_params[$name]['disableParentNode']) {
                            $xmlWriter->startElement($name);
                        }

                        foreach ($this->$name as $subelement) {
                            $subelement->toXML($xmlWriter);
                        }

                        if (!isset($this->_params[$name]['disableParentNode']) || false == $this->_params[$name]['disableParentNode']) {
                            $xmlWriter->endElement();
                        }
                    }
                } else {
                    $xmlWriter->writeElement($name, $this->$name);
                }
            }
        }

        $xmlWriter->endElement(); // End of parent node

        // End of class name tag
        if (null !== $this->_xmlNodeName) {
            $xmlWriter->endElement();
        }
        $xmlWriter->endDocument();

        return $xmlWriter->outputMemory(true);
    }
}