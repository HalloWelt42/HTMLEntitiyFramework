<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class AcceptCharset extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'accept-charset';
      $this->attribute_value = $value;

  }


}