<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Autocomplete extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'autocomplete';
      $this->attribute_value = $value;

  }


}