<?php
namespace HEF\model\attributes\globals;

trait TSpellcheck 
{

    public function sSpellcheck( Spellcheck $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
