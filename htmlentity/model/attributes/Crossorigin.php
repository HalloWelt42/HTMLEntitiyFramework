<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Crossorigin extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'crossorigin';
      $this->attribute_value = $value;

  }


}