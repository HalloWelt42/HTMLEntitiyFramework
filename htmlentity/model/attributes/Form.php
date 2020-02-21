<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Form extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'form';
      $this->attribute_value = $value;

  }


}