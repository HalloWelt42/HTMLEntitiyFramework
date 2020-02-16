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

    print_r(
        (new HTMLSerializer(
            (new Html)
                ->add(
                    (new Head)
                        ->add(new Meta)
                )
                ->add(new Body)))
            ->compile()
    );

  }

}