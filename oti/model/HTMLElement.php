<?php

namespace oti\model;

class HTMLElement
{

    /**
     * @var string
     */
    protected $element_name;

    /**
     * @var HTMLElements
     */
    protected $html_elements;

    /**
     * @var HTMLAttributes
     */
    protected $html_attributes;


    public function add_htmlelement ( HTMLElement $element )
    {
        $this -> html_elements[] = $element;

        return $this;
    }

    public function set_htmlelements ( HTMLElements $elements )
    {
        $this -> html_elements = $elements;

        return $this;
    }

    /**
     * @return string
     */
    public function get_element_name ()
    {
        return $this -> element_name;
    }

    /**
     * @return HTMLAttributes
     */
    public function get_attributes ()
    {
        return $this -> html_attributes;
    }

    /**
     * @return HTMLElements
     */
    public function get_elements ()
    {
        return $this -> html_elements;
    }

}