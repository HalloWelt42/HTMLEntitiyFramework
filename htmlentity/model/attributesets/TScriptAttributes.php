<?php

namespace htmlentity\model\attributesets;

use htmlentity\model\attributes\TAsync;
use htmlentity\model\attributes\TCharset;
use htmlentity\model\attributes\TCrossorigin;
use htmlentity\model\attributes\TDefer;
use htmlentity\model\attributes\TIntegrity;
use htmlentity\model\attributes\TLanguage;
use htmlentity\model\attributes\TSrc;
use htmlentity\model\attributes\TType;


trait TScriptAttributes
{
    use TAsync;
    use TCharset;
    use TCrossorigin;
    use TDefer;
    use TIntegrity;
    use TLanguage;
    use TSrc;
    use TType;

}