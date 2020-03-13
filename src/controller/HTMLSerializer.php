<?php

namespace HEF\controller;

use DOMDocument;
use DOMElement;
use HEF\model\HTMLAttribute;
use HEF\model\HTMLElement;
use HEF\model\htmlelements\Html;

class HTMLSerializer
{

  const UTF_8 = 'utf-8';

  /**
   * @var Html
   */
  private $html_obj;

  /**
   * @var DOMDocument
   */
  private $dom;


  /**
   * HTMLSerializer constructor.
   *
   * @param Html $html_obj
   */
  public function __construct(Html $html_obj)
  {

    $this->html_obj = $html_obj;
    $this->dom = new DOMDocument();
    $this->dom->encoding = self::UTF_8;
    $this->dom->xmlVersion = '1.0';
    $this->dom->formatOutput = true;
  }


  /**
   * @return string
   */
  public function compile()
  {

    $this->dom->appendChild(
        $this->parser(
            $this->html_obj,
            $this->dom->createElement($this->html_obj->gElementName())
        )
    );

    return $this->dom->saveHTML();
  }


  /**
   * @param HTMLElement $html_element
   * @param DOMElement $node
   * @return DOMElement
   */
  public function parser(HTMLElement $html_element, DOMElement $node)
  {
    if ($html_element->gElements()) {
      /**
       * @var $child_element HTMLElement
       */
      foreach ($html_element->gElements() as $child_element) {

        if ($child_element->gElementName() === 'text') {

          $node->appendChild(
              $this->dom->createTextNode(
                  $child_element->gText()
              )
          );

        } else {

          $node->appendChild(
              $this->parser(
                  $child_element,
                  $this->dom->createElement(
                      $child_element->gElementName()
                  )
              )
          );

        }
      }
    }


    if ($html_element->gAttributes()) {
      /**
       * @var $html_attibute HTMLAttribute
       */
      foreach ($html_element->gAttributes() as $html_attibute) {
        // TODO : Inhalt ggf prüfen. Vermeidung leerer Attribute : $html_attibute -> gValue()

        $attibute = $this->dom->createAttribute($html_attibute->gAttributeName());
        $attibute->value = $html_attibute->gValue();
        $node->appendChild($attibute);
      }
    }


    return $node;
  }

}