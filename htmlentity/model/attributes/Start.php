<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Start extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'start';
      $this->attribute_value = $value;

  }


}