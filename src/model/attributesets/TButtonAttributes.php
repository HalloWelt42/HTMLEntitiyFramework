<?php

namespace HEF\model\attributesets;

use HEF\model\attributes\TAutofocus;
use HEF\model\attributes\TDisabled;
use HEF\model\attributes\TForm;
use HEF\model\attributes\TFormaction;
use HEF\model\attributes\TName;
use HEF\model\attributes\TType;
use HEF\model\attributes\TValue;


trait TButtonAttributes
{
    use TAutofocus;
    use TDisabled;
    use TForm;
    use TFormaction;
    use TName;
    use TType;
    use TValue;

}