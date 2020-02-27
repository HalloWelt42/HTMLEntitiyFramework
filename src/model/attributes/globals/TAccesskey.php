<?php
namespace HEF\model\attributes\globals;

trait TAccesskey
{

  /**
   * @param Accesskey $obj
   * @return $this
   */
    public function set_accesskey( Accesskey $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
