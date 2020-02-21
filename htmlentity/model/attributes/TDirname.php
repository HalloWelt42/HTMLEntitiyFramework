<?php
namespace htmlentity\model\attributes;

trait TDirname 
{

  /**
   * 
   * 
   * 
   * @param Dirname $obj
   * @return $this
   */
    public function set_dirname( Dirname $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
