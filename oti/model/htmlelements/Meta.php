<?php


namespace oti\model\htmlelements;


use oti\model\HTMLAttribute;
use oti\model\HTMLElement;

class Meta extends HTMLElement
{


  public function __construct()
  {
    $this->element_name = 'meta';
  }


  public function set_charset( $value ){
    $this->html_attributes['charset'] = $value;
  }

}