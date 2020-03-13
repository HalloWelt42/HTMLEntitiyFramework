<?php
namespace HEF\model\attributes;

trait TSpan 
{

  /**
   * 
   * 
   * 
   * @param Span $obj
   * @return $this
   */
    public function sSpan( Span $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
