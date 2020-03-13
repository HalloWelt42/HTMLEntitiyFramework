<?php
namespace HEF\model\attributes;

trait TAutofocus 
{

  /**
   * 
   * 
   * 
   * @param Autofocus $obj
   * @return $this
   */
    public function sAutofocus( Autofocus $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
