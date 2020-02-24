<?php
namespace htmlentity\model\attributes;

trait TOptimum 
{

  /**
   * 
   * 
   * 
   * @param Optimum $obj
   * @return $this
   */
    public function set_optimum( Optimum $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
