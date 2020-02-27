<?php
namespace HEF\model\attributes;

trait TScoped 
{

  /**
   * 
   * 
   * 
   * @param Scoped $obj
   * @return $this
   */
    public function set_scoped( Scoped $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
