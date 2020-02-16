<?php

namespace oti\controller;

use oti\model\attributes\Charset;
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
            (new Html)->add_htmlelement(
                (new Head)->add_htmlelement(
                    (new Meta)->set_charset(Charset::UTF8 )
                )

            )->add_htmlelement(
                new Body)

        ))->compile()
    );

  }

}