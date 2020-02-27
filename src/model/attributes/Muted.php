<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Muted extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'muted';
      $this->attribute_value = $value;

  }


}