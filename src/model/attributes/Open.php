<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Open extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'open';
      $this->attribute_value = $value;

  }


}