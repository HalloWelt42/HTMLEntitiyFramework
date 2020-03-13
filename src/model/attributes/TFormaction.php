<?php
namespace HEF\model\attributes;

trait TFormaction 
{

  /**
   * 
   * 
   * 
   * @param Formaction $obj
   * @return $this
   */
    public function sFormaction( Formaction $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
