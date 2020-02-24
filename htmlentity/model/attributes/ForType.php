<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class ForType extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'for';
      $this->attribute_value = $value;

  }


}