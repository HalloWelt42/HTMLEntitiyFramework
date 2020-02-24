<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class High extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'high';
      $this->attribute_value = $value;

  }


}