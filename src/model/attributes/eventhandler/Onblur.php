<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Onblur extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this -> attribute_name = 'onblur';
      $this -> attribute_value = $value;
  }



}