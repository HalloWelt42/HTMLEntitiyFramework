<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Span extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'span';
      $this->attribute_value = $value;

  }


}