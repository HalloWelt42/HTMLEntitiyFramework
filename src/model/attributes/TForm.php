<?php
namespace HEF\model\attributes;

trait TForm 
{

  /**
   * 
   * 
   * 
   * @param Form $obj
   * @return $this
   */
    public function set_form( Form $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
