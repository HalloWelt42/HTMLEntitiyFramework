<?php

namespace htmlentity\model\attributes\globals;


use htmlentity\model\HTMLAttribute;

class Accesskey extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'accesskey';
      $this->attribute_value = $value;

  }


}