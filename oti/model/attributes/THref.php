<?php


namespace oti\model\attributes;


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