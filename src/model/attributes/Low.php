<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Low extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'low';
      $this->attribute_value = $value;

  }


}