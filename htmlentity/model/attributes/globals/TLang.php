
<?
namespace htmlentity\model\attributes\globals;

trait TLang 
{

    public function set_lang( Lang $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
