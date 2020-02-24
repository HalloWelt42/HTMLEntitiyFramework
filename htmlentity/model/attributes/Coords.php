<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

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