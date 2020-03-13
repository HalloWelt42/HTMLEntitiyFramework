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

        ->addElement(
            (new Head)

                ->addElement(
                    (new Title)->addElement(
                        new Text(new HTMLContent('Titel-Überschrift'))
                    )
                )
                ->addElement(
                    (new NoScript)->addElement(
                        new Text(new HTMLContent('Kein JS eingeschaltet'))
                    )
        )

                ->addElement(
                    (new Meta)->sCharset(new Charset(EnumCharset::UTF8))
                )

                ->addElement(
                    (new Script)->sSrc(new Src('sr.js'))
                )


        )

        ->addElement(
            (new Body)

                ->addElement(
                    (new Text(new HTMLContent(' text ')))
                )

                ->addElement(
                (new Form())->sAction(new Action('?'))
                    ->addElement(
                        (new Input())->sType(new Type('text'))
                    )
                )

                ->addElement((new Address)
                        ->sId(new Id('pp'))
                    ->sClass(new ClassType('foo bar'))
                )

        );



    print_r(
        (new HTMLSerializer($html_obj))->compile()
    );


  }

}