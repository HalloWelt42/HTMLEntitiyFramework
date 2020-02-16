<?php


namespace oti\model;


class HTMLAttribute
{
  /**
   * @var string
   */
  protected $attribute_name;

  /**
   * @var HTMLAttributes
   */
  protected $html_attributes;


  /**
   * @param HTMLAttribute $attribute
   * @return $this
   */
  public function add(HTMLAttribute $attribute)
  {
    $this->html_attributes[] = $attribute;
    return $this;
  }

  /**
   * @param HTMLAttributes $attributes
   * @return $this
   */
  public function set(HTMLAttributes $attributes)
  {
    $this->html_attributes = $attributes;
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
   * @return HTMLAttributes
   */
  public function get_attributes()
  {
    return $this->html_attributes;
  }

}