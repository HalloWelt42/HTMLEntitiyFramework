<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Onmouseenter extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'onmouseenter';
      $this->attribute_value = $value;

  }


}