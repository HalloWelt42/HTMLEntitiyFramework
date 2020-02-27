<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Rows extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'rows';
      $this->attribute_value = $value;

  }


}