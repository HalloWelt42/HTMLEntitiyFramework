<?php

namespace htmlentity\controller;

use htmlentity\model\attributes\Action;
use htmlentity\model\attributes\Charset;
use htmlentity\model\attributes\Href;
use htmlentity\model\attributes\Src;
use htmlentity\model\attributes\Type;
use htmlentity\model\enum\EnumCharset;
use htmlentity\model\HTMLContent;
use htmlentity\model\htmlelements\Base;
use htmlentity\model\htmlelements\Body;
use htmlentity\model\htmlelements\Form;
use htmlentity\model\htmlelements\Head;
use htmlentity\model\htmlelements\Html;
use htmlentity\model\htmlelements\Input;
use htmlentity\model\htmlelements\Link;
use htmlentity\model\htmlelements\Meta;
use htmlentity\model\htmlelements\NoScript;
use htmlentity\model\htmlelements\Script;
use htmlentity\model\htmlelements\Text;
use htmlentity\model\htmlelements\Title;

class Main
{

  public function __construct()
  {

    $html_obj = (new Html)

        ->add_htmlelement(
            (new Head)

                ->add_htmlelement(
                    (new Title)->add_htmlelement(
                        new Text(new HTMLContent('Titel-Überschrift'))
                    )
                )
                ->add_htmlelement(
                    (new NoScript)->add_htmlelement(
                        new Text(new HTMLContent('Kein JS eingeschaltet'))
                    )
        )

                ->add_htmlelement(
                    (new Meta)->set_charset(new Charset(EnumCharset::UTF8))
                )

                ->add_htmlelement(
                    (new Script)->set_src(new Src('sr.js'))
                )


        )

        ->add_htmlelement(
            (new Body)
                ->add_htmlelement(
                    (new Text(new HTMLContent('öüä?ÖÄÜ')))
                )
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