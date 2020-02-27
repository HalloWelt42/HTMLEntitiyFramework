<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Buffered extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'buffered';
      $this->attribute_value = $value;

  }


}