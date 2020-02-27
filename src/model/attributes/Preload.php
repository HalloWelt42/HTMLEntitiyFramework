<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Preload extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'preload';
      $this->attribute_value = $value;

  }


}