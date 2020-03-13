<?php
namespace HEF\model\attributes;

trait THigh 
{

  /**
   * 
   * 
   * 
   * @param High $obj
   * @return $this
   */
    public function sHigh( High $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
