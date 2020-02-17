<?php


namespace htmlentity\model\attributesets;


use htmlentity\model\attributes\TCharset;
use htmlentity\model\attributes\TContent;
use htmlentity\model\attributes\THttpEquiv;
use htmlentity\model\attributes\TName;

trait TMetaTag
{

    use TCharset;
    use THttpEquiv;
    use TName;
    use TContent;

}