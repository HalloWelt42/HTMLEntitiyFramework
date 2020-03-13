<?php

namespace HEF\model;



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


  public function addElement(HTMLElement $element)
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
  public function sHtmlElements(HTMLElements $elements)
  {
    $this->html_elements = $elements;

    return $this;
  }

  /**
   * @return string
   */
  public function gElementName()
  {
    return $this->element_name;
  }

  /**
   * @return HTMLAttributes
   */
  public function gAttributes()
  {
    return $this->html_attributes;
  }

  /**
   * @return HTMLElements
   */
  public function gElements()
  {
    return $this->html_elements;
  }

  /**
   * @param HTMLContent $obj
   * @return $this
   */
  protected function sText(HTMLContent $obj )
  {
    $this -> html_text = $obj -> gText();
    return $this;
  }

  public function gText(){
    return $this -> html_text;
  }


  # Hilfsfunktion für kurze Schreibweise in den Traits

  /**
   * @param HTMLAttribute $attribut_obj
   */
  protected function sAttribute(HTMLAttribute $attribut_obj)
  {
    $this->html_attributes[$attribut_obj->gAttributeName()] = $attribut_obj;
  }

}