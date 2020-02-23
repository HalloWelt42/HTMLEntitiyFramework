<?php

namespace htmlentity\model;


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

  /**
   * @var HTMLAttributes
   */
  protected $html_attributes;


  /**
   * @var string
   */
  protected $html_text;


  public function add_htmlelement(HTMLElement $element)
  {
    $this->html_elements[] = $element;

    return $this;
  }


  /**
   * Überschreibt bestehende Elemente
   *
   * @param HTMLElements $elements
   *
   * @return $this
   */
  public function set_htmlelements(HTMLElements $elements)
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
   * @return HTMLAttributes
   */
  public function get_attributes()
  {
    return $this->html_attributes;
  }

  /**
   * @return HTMLElements
   */
  public function get_elements()
  {
    return $this->html_elements;
  }

  /**
   * @param HTMLContent $obj
   * @return $this
   */
  protected function set_text(HTMLContent $obj )
  {
    $this -> html_text = $obj -> get_text();
    return $this;
  }

  public function get_text(){
    return $this -> html_text;
  }


  # Hilfsfunktion für kurze Schreibweise in den Traits

  /**
   * @param HTMLAttribute $attribut_obj
   */
  protected function set_attribute(HTMLAttribute $attribut_obj)
  {
    $this->html_attributes[$attribut_obj->get_attribute_name()] = $attribut_obj;
  }

}