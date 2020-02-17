<?php

namespace htmlentity\controller;

use htmlentity\model\attributes\Charset;
use htmlentity\model\attributes\HttpEquiv;
use htmlentity\model\htmlelements\Body;
use htmlentity\model\htmlelements\Head;
use htmlentity\model\htmlelements\Html;
use htmlentity\model\htmlelements\Meta;

class Main
{

  public function __construct()
  {

    print_r(
        (new HTMLSerializer(
            (new Html)->add_htmlelement(
                (new Head)

                    ->add_htmlelement(
                        (new Meta)->set_charset(
                            (new Charset(Charset::UTF8 ))
                        )
                    )

                    ->add_htmlelement(
                        (new Meta)->set_http_equiv(
                            (new HttpEquiv(HttpEquiv::REFRESH ))
                        )
                    )

            )->add_htmlelement(
                new Body
            )

        ))->compile()
    );


  }

}