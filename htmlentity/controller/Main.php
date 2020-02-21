<?php

namespace htmlentity\controller;

use htmlentity\model\attributes\Action;
use htmlentity\model\attributes\Charset;
use htmlentity\model\attributes\globals\Data;
use htmlentity\model\attributes\Name;
use htmlentity\model\htmlelements\Body;
use htmlentity\model\htmlelements\Form;
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
                        (new Meta)

                            ->set_charset(
                                (new Charset(Charset::UTF8 ))
                            )
                    )

            )->add_htmlelement(
                (new Body)
                    ->add_htmlelement(
                        (new Form())->set_action(new Action(''))
                    )
            )

        ))->compile()
    );


  }

}