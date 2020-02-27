<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Step extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'step';
      $this->attribute_value = $value;

  }


}