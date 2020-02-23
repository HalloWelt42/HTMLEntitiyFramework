<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Async extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'async';
      $this->attribute_value = $value;

  }


}