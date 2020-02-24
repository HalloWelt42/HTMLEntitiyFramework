<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Reversed extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'reversed';
      $this->attribute_value = $value;

  }


}