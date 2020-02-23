<?php

namespace htmlentity\controller;

use htmlentity\model\attributes\Action;
use htmlentity\model\attributes\Charset;
use htmlentity\model\attributes\Href;
use htmlentity\model\attributes\Type;
use htmlentity\model\enum\EnumCharset;
use htmlentity\model\htmlelements\Body;
use htmlentity\model\htmlelements\Form;
use htmlentity\model\htmlelements\Head;
use htmlentity\model\htmlelements\Html;
use htmlentity\model\htmlelements\Input;
use htmlentity\model\htmlelements\Link;
use htmlentity\model\htmlelements\Meta;

class Main
{

  public function __construct()
  {

    $html_obj = (new Html)

        ->add_htmlelement(
            (new Head)

                ->add_htmlelement(
                    (new Meta)->set_charset(new Charset(EnumCharset::UTF8))
                )

                ->add_htmlelement(
                    (new Link)->set_href(new Href(''))
                )
        )

        ->add_htmlelement(
            (new Body)
                ->add_htmlelement(
                (new Form())->set_action(new Action('?'))
                    ->add_htmlelement(
                        (new Input())->set_type(new Type('text'))
                    )
                )
        );



    print_r(
        (new HTMLSerializer($html_obj))->compile()
    );


  }

}