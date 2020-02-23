<?php


namespace htmlentity\model\attributes;


use htmlentity\model\HTMLAttribute;

class Nonce extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
    $this->attribute_name = 'nonce';
    $this->attribute_value = $value;

  }

}