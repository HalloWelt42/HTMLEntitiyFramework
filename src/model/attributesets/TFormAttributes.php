<?php

namespace HEF\model\attributesets;

use HEF\model\attributes\TAccept;
use HEF\model\attributes\TAcceptCharset;
use HEF\model\attributes\TAction;
use HEF\model\attributes\TAutocomplete;
use HEF\model\attributes\TEnctype;
use HEF\model\attributes\TMethod;
use HEF\model\attributes\TName;
use HEF\model\attributes\TNovalidate;
use HEF\model\attributes\TTarget;


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