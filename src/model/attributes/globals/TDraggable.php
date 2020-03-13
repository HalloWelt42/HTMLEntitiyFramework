<?php
namespace HEF\model\attributes\globals;

trait TDraggable 
{

    public function sDraggable( Draggable $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
