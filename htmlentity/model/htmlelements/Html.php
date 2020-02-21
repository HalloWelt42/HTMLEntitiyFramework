<?php


namespace htmlentity\model\htmlelements;

use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

/**
 * html ist der root-Knoten aller HTML-Elemente
 *
 * Class Body
 * @package htmlentity\model
 */
class Html extends HTMLElement
{

  /**
   *  $html_elements
   *      ist optional zum Einfügen von HTML-Zweig-Objekten
   *
   * Html constructor.
   * @param HTMLElements|null $html_elements
   */
  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'html';
    $this->html_elements = ($html_elements === null ? new HTMLElements() : $html_elements);
  }

}