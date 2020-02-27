<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Oncancel extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'oncancel';
      $this->attribute_value = $value;

  }


}