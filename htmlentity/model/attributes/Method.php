<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Method extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'method';
      $this->attribute_value = $value;

  }


}