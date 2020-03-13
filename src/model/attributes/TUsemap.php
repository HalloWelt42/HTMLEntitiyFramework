<?php
namespace HEF\model\attributes;

trait TUsemap 
{

  /**
   * 
   * 
   * 
   * @param Usemap $obj
   * @return $this
   */
    public function sTsemap( Usemap $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
