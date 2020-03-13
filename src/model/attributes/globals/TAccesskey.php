<?php
namespace HEF\model\attributes\globals;

trait TAccesskey
{

  /**
   * @param Accesskey $obj
   * @return $this
   */
    public function sAccesskey( Accesskey $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
