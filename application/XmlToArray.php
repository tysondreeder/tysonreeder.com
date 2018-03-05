<?php

class XmlToArray
{
    /**
     * The default options for parsing
     *
     * @var array
     */
    protected $defaults = array(
            'namespaceSeparator' => ':',   //you may want this to be something other than a colon
            'attributePrefix'    => '@',   //to distinguish between attributes and nodes with the same name
            'alwaysArray'        => array(),    //array of xml tag names which should always become arrays
            'autoArray'          => true,  //only create arrays for tags which appear more than once
            'textContent'        => '$',   //key used for the text content of elements
            'autoText'           => true,  //skip textContent key if node has no attributes or child nodes
    );

    /**
     * The merged new and default options
     *
     * @var array
     */
    protected $options = array();

    /**
     * Instantiate the XmlToArray class
     */
    public function __construct(
            $options = array()
    )
    {
        $this->options = array_merge($this->defaults, $options);

    }

    /**
     * Build the array from XML
     *
     * @param \SimpleXmlElement
     *
     * @return array
     */
    public function build($xml)
    {

        $namespaces = $xml->getDocNamespaces();
        $namespaces[''] = null;
        $text = trim((string) $xml);

        $attributes = $this->setAttributes($xml, $namespaces);

        $tags = $this->setTags($xml, $namespaces);

        $content = $this->setContent($text);

        return [
            $xml->getName() => ! $this->options['autoText'] || $attributes || $tags || ($text === '') ?
            array_merge($attributes, $tags, $content) : $text
        ];
    }

    /**
     * Set text content
     *
     * @param $text string
     *
     * @return string
     */
    protected function setContent($text)
    {
        //get text content of node
        $content = array();

        if ($text !== '') {
            $content[$this->options['textContent']] = $text;
        }

        return $content;
    }

    /**
     * Set attributes based on namespaces
     *
     * @param $xml string
     * @param $namespaces array
     *
     * @return array
     */
    protected function setAttributes($xml, $namespaces)
    {
        $array = array();

        foreach ($namespaces as $prefix => $namespace) {
            foreach ($xml->attributes($namespace) as $name => $attribute) {
                $key = $this->options['attributePrefix'] . ($prefix ? $prefix . $this->options['namespaceSeparator'] : '') . $name;
                $array[$key] = (string) $attribute;
            }
        }

        return $array;
    }

    /**
     * Set child tags based on namespaces
     *
     * @param $xml string
     * @param $namespaces array
     *
     * @return array
     */
    protected function setTags($xml, $namespaces)
    {
        $array = array();

        foreach ($namespaces as $prefix => $namespace) {
            foreach ($xml->children($namespace) as $childXml) {

                $children = $this->build($childXml);

                foreach ($children as $name => $properties) {
                    $name = $this->setTagName($name, $prefix);

                    if (! isset($array[$name])) {
                        $array[$name] = in_array($name, $this->options['alwaysArray']) || ! $this->options['autoArray'] ? [$properties] : $properties;
                        break;
                    }

                    if (is_array($array[$name]) && array_keys($array[$name]) === range(0, count($array[$name])-1)) {
                        $array[$name][] = $properties;
                        break;
                    }
                        
                    $array[$name] = [$array[$name], $properties];
                }
            }
        }

        return $array;
    }

    /**
     * Set child tag names
     *
     * @param $name string
     * @param $prefix string
     *
     * @return string
     */
    protected function setTagName($name, $prefix = '')
    {
        if ($prefix) {
            return $prefix . $this->options['namespaceSeparator'] . $name;
        }

        return $name;
    }
}