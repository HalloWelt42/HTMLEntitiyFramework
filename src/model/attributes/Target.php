<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Target extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'target';
      $this->attribute_value = $value;

  }


}