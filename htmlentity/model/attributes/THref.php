<?php


namespace htmlentity\model\attributes;


trait THref
{

    /**
     * @var Href
     */
    private $href;

  public function set_href( Href $obj ){
    $this -> set_attribute($obj);
    return $this;
  }

}