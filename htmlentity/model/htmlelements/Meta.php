<?php


namespace htmlentity\model\htmlelements;


use htmlentity\model\attributesets\TMetaTag;
use htmlentity\model\HTMLElement;

class Meta extends HTMLElement
{

    use TMetaTag;


    public function __construct ()
    {
        $this -> element_name = 'meta';
    }


}