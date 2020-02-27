<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Colspan extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'colspan';
      $this->attribute_value = $value;

  }


}