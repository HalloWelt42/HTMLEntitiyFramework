<?php


namespace HEF\model\attributes;


use HEF\model\HTMLAttribute;

class Href extends HTMLAttribute
{

  /**
   * Href constructor.
   * @param $value
   */
  public function __construct($value = null)
  {
    $this->attribute_name = 'href';
    $this->attribute_value = $value;

  }

}