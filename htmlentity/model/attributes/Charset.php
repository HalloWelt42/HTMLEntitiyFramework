<?php

namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Charset extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name='charset';
      $this->attribute_value=$value;

  }


}