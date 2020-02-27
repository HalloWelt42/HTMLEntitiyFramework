<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Accept extends HTMLAttribute
{


  /**
   * Eine Komma-unterteilte Liste von Inhaltstypen, die der Server akzeptiert.
   *
   *
   *
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'accept';
      $this->attribute_value = $value;

  }


}