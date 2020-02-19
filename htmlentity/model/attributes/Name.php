<?php

namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Name extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name='name';
      $this->attribute_value=$value;

  }


}