<?php

namespace oti\controller;



use oti\model\htmlelements\Body;
use oti\model\htmlelements\Head;
use oti\model\htmlelements\Html;
use oti\model\htmlelements\Meta;

class Main
{

  public function __construct()
  {


    $html_base = (new Html)
        ->add(
            (new Head)
                ->add(new Meta)
        )
        ->add(new Body);

    $html_generator = new HTMLSerializer($html_base);
    $doc = $html_generator->compile();

    print_r($doc);

  }

}