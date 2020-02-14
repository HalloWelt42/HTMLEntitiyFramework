<?php

namespace oti\controller;




use oti\model\Body;
use oti\model\Head;
use oti\model\HTMLElements;


class Main{

  public function __construct(){

      $html_obj = (new HTMLElements());
      $html_obj[] = new Head;
      $html_obj[] = new Body;
      $html_generator = new HTMLSerializer( $html_obj );
      $html_generator->compile();

  }

}