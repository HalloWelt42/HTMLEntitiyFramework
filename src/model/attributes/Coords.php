<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Coords extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'coords';
      $this->attribute_value = $value;

  }


}