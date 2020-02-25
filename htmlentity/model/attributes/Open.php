<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Open extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'open';
      $this->attribute_value = $value;

  }


}