<?php


namespace htmlentity\model\attributes;

use SplFileObject;

new PHPCodeGeneratorAttribute;

class PHPCodeGeneratorAttribute
{

  private $mozilla_attribute_list;
  private $attributes;
  private $rendered;

  public function __construct()
  {
    $this->mozilla_attribute_list = [];
    $this->load_mozilla_attributlist([
        'meta', 'Globale Attribute','Globales Attribut','Globale Attribut','Global attribute'
    ]);
    print_r($this->attributes);

#    $this->rendered = $this->render();
#    $this->output_on_screen();
  }

  public function render()
  {

    return <<<RUN

namespace htmlentity\model\attributes;

trait THttpEquiv
{

    public function set_http_equiv( HttpEquiv \$obj ){
        \$this -> set_attribute(\$obj);
        return \$this;
    }

}

RUN;


  }

  public function output_on_screen()
  {

    print_r(
        $this->rendered
    );

    print_r(
        PHP_EOL
    );

  }

  /**
   * @param array $select
   */
  public function load_mozilla_attributlist(array $select)
  {

    $this->attributes = [];

    $csv_file = new SplFileObject(__DIR__ . DIRECTORY_SEPARATOR . 'mozilla_html_attributes.csv');
    while (!$csv_file->eof()) {
      $csv_entry = $csv_file->fgetcsv(';');

      if (!$csv_entry[0]) {
        continue;
      }

      foreach (explode(',', $csv_entry[1]) as $html_tag) {
        if (in_array(trim($html_tag, " \t\n\r\0\x0B" . "<>" . "\x00..\x1F" . chr(194) . chr(160)), $select)) {
          $this->attributes[] = $csv_entry[0];
        }
      }

    }
  }


}