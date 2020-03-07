<?php

namespace HEF\controller;

use HEF\model\attributes\Action;
use HEF\model\attributes\Charset;
use HEF\model\attributes\globals\ClassType;
use HEF\model\attributes\globals\Id;
use HEF\model\attributes\Src;
use HEF\model\attributes\Type;
use HEF\model\enum\EnumCharset;
use HEF\model\HTMLContent;
use HEF\model\htmlelements\Address;
use HEF\model\htmlelements\Body;
use HEF\model\htmlelements\Form;
use HEF\model\htmlelements\Head;
use HEF\model\htmlelements\Html;
use HEF\model\htmlelements\Input;
use HEF\model\htmlelements\Meta;
use HEF\model\htmlelements\NoScript;
use HEF\model\htmlelements\Script;
use HEF\model\htmlelements\Text;
use HEF\model\htmlelements\Title;

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
                    (new Text(new HTMLContent(' text ')))
                )

                ->add_htmlelement(
                (new Form())->set_action(new Action('?'))
                    ->add_htmlelement(
                        (new Input())->set_type(new Type('text'))
                    )
                )

                ->add_htmlelement((new Address)
                        ->set_id(new Id('pp'))
                    ->set_class(new ClassType('foo bar'))
                )

        );



    print_r(
        (new HTMLSerializer($html_obj))->compile()
    );


  }

}