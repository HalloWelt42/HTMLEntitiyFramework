<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class AcceptCharset extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'accept-charset';
      $this->attribute_value = $value;

  }


}