<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Method extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'method';
      $this->attribute_value = $value;

  }


}