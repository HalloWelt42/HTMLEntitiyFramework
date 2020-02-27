<?php
namespace HEF\model\attributes;

trait TRel 
{

  /**
   * 
   * 
   * 
   * @param Rel $obj
   * @return $this
   */
    public function set_rel( Rel $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
