
<?
namespace htmlentity\model\attributes\globals;

trait TSpellcheck 
{

    public function set_spellcheck( Spellcheck $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
