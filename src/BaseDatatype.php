<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 11.06
 */

namespace Tnt;

class BaseDatatype
{
    /**
     * Properties definitions
     * @var array
     */
    protected $_params = array();
    protected $action = null;
    protected $itemaction = null;
    protected $attributes = null;

    /**
     * Property values bag
     * @var array
     */
    protected $_values = array();

    /**
     * Parent node name of the object
     * @var string
     */
    protected $_xmlNodeName = null;

    /**
     * Check if current object is empty or not
     *
     * @return boolean True if it is, false otherwise
     */
    /*public function isEmpty()
    {
        foreach ($this->_values as $k => $v)
        {
            if (is_object($v))
            {
                if (!$v->isEmpty())
                {
                    return false;
                }
            }
            elseif (!empty($v) && $v !== null)
            {
                return false;
            }
        }

        return true;
    }*/

    /**
     * Generates the XML to be sent to DHL
     *
     * @param \XMLWriter $xmlWriter XMl Writer instance
     *
     * @return void
     */
    public function toXML(\XMLWriter $xmlWriter = null)
    {

        /*if ($this->isEmpty())
        {
            return;
        }*/

        $displayedParentNode = false;
        //$this->validateParameters();

        if (null !== $this->_xmlNodeName) {
            $parentNode = $this->_xmlNodeName;
        } else {
            $parts = explode('\\', get_class($this));
            $parentNode = array_pop($parts);
        }

        $xmlWriter->startElement($parentNode);
        if ($this->attributes != null) {
            foreach ($this->attributes as $name => $value) {
                $xmlWriter->writeAttribute($name, $value);
            }
        }

        if (!is_null($this->action)) {
            $xmlWriter->writeAttribute('action', $this->action);
        }
        if (!is_null($this->itemaction)) {
            $xmlWriter->writeAttribute('itemaction', $this->itemaction);
        }

        foreach ($this->_params as $name => $infos) {
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
    }

    /**
     * Initialize object from an XML string
     *
     * @param string $xml XML String
     *
     * @return void
     */
    /*public function initFromXML($xml)
    {
        $xml = simplexml_load_string(str_replace('req:', '', $xml));
        $parts = explode('\\', get_class($this));
        $className = array_pop($parts);
        foreach ($xml->children() as $child)
        {
            $childName = $child->getName();

            if (isset($this->$childName) && is_object($this->$childName))
            {
                $this->$childName->initFromXml($child->asXML());
            }
            elseif (isset($this->_params[$childName]['multivalues']) && $this->_params[$childName]['multivalues'])
            {
                foreach ($child->children() as $subchild)
                {
                    $subchildName = $subchild->getName();
                    $childClassname = implode('\\', $parts) . '\\' . $this->_params[$subchildName]['type'];
                    $childClassname = str_replace('Entity', 'Datatype', $childClassname);
                    if ('string' == $this->_params[$subchildName]['type'])
                    {
                        $childObj = trim((string) $subchild);
                    }
                    else
                    {
                        $childObj = new $childClassname();
                        $childObj->initFromXml($subchild->asXML());
                    }
                    $addMethodName = 'add' . ucfirst($subchildName);
                    $this->$addMethodName($childObj);
                }
            }
            elseif (isset($this->$childName) && ((string) $child))
            {
                $this->$childName = trim((string) $child);
            }
        }
    }*/

}