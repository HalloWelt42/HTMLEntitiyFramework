<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Action extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'action';
      $this->attribute_value = $value;

  }


}