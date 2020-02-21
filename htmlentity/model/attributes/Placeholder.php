<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Placeholder extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'placeholder';
      $this->attribute_value = $value;

  }


}