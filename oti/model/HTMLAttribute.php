<?php


namespace oti\model;


class HTMLAttribute
{
  /**
   * @var string
   */
  protected $attribute_name;

  /**
   * @var HTMLAttribute
   */
  protected $html_attribute;


  /**
   * @param HTMLAttribute $attribute
   * @return $this
   */
  public function set_attribute(HTMLAttribute $attribute)
  {
    $this->html_attribute = $attribute;
    return $this;
  }


  /**
   * @return string
   */
  public function get_attribute_name()
  {
    return $this->attribute_name;
  }

  /**
   * @return HTMLAttribute
   */
  public function get_attribute()
  {
    return $this->html_attribute;
  }
/*
  public function __toString()
  {
    return (string)$this->html_attribute;
  }*/
}