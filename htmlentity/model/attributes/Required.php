<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Required extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'required';
      $this->attribute_value = $value;

  }


}