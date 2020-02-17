<?php


namespace htmlentity\model\attributes;


trait THref
{

    /**
     * @var Href
     */
    private $href;

    public function __construct ()
    {
        $this->href=new Href;
    }

}