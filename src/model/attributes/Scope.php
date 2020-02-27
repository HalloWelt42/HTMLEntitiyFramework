<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Scope extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'scope';
      $this->attribute_value = $value;

  }


}