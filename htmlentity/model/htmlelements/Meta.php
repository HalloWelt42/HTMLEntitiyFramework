<?php


namespace htmlentity\model\htmlelements;


use htmlentity\model\attributes\TCharset;
use htmlentity\model\attributes\THttpEquiv;
use htmlentity\model\HTMLElement;

class Meta extends HTMLElement
{

    use TCharset;
    use THttpEquiv;


    public function __construct ()
    {
        $this -> element_name = 'meta';
    }


}