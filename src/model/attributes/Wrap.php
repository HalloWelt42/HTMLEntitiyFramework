<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Wrap extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'wrap';
      $this->attribute_value = $value;

  }


}