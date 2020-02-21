<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Hreflang extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'hreflang';
      $this->attribute_value = $value;

  }


}