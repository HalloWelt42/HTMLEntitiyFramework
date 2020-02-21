<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Autocomplete extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'autocomplete';
      $this->attribute_value = $value;

  }


}