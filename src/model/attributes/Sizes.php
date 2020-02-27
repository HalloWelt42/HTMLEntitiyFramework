<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Sizes extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'sizes';
      $this->attribute_value = $value;

  }


}