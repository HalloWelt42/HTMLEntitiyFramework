<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Onclose extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'onclose';
      $this->attribute_value = $value;

  }


}