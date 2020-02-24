<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Challenge extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'challenge';
      $this->attribute_value = $value;

  }


}