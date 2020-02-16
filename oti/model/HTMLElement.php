<?php

namespace oti\model;

class HTMLElement
{

  /**
   * @var string
   */
  protected $element_name;

  /**
   * @var HTMLElements
   */
  protected $html_elements;


  public function add(HTMLElement $element)
  {
    $this->html_elements[] = $element;
    return $this;
  }

  public function set(HTMLElements $elements)
  {
    $this->html_elements = $elements;
    return $this;
  }

  /**
   * @return string
   */
  public function get_element_name()
  {
    return $this->element_name;
  }

  /**
   * @return HTMLElements
   */
  public function get_elements()
  {
    return $this->html_elements;
  }

}