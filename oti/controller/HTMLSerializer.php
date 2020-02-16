<?php

namespace oti\controller;

use DOMDocument;
use DOMElement;
use oti\model\HTMLElement;
use oti\model\htmlelements\Html;

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
            $this->dom->createElement($this->html_obj->get_element_name())
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

    if ($html_element->get_elements()) {
      /**
       * @var $child_element HTMLElement
       */
      foreach ($html_element->get_elements() as $child_element) {

        $node->appendChild(
            $this->parser(
                $child_element,
                $this->dom->createElement(
                    $child_element->get_element_name()
                )
            )
        );
      }
    }


    return $node;
  }

}