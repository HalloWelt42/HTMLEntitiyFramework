<?php


namespace HEF\model\attributes;


trait THref
{

    /**
     * @var Href
     */
    private $href;

  public function sHref( Href $obj ){
    $this -> sAttribute($obj);
    return $this;
  }

}