<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Accept extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'accept';
      $this->attribute_value = $value;

  }


}