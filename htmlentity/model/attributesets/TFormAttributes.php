<?php

namespace htmlentity\model\attributesets;

use htmlentity\model\attributes\TAccept;
use htmlentity\model\attributes\TAcceptCharset;
use htmlentity\model\attributes\TAction;
use htmlentity\model\attributes\TAutocomplete;
use htmlentity\model\attributes\TEnctype;
use htmlentity\model\attributes\TMethod;
use htmlentity\model\attributes\TName;
use htmlentity\model\attributes\TNovalidate;
use htmlentity\model\attributes\TTarget;


trait TFormAttributes
{
    use TAccept;
    use TAcceptCharset;
    use TAction;
    use TAutocomplete;
    use TEnctype;
    use TMethod;
    use TName;
    use TNovalidate;
    use TTarget;
}