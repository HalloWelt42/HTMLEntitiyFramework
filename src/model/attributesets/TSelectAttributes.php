<?php

namespace HEF\model\attributesets;

use HEF\model\attributes\TAutofocus;
use HEF\model\attributes\TDisabled;
use HEF\model\attributes\TForm;
use HEF\model\attributes\TMultiple;
use HEF\model\attributes\TName;
use HEF\model\attributes\TRequired;
use HEF\model\attributes\TSize;


trait TSelectAttributes
{
    use TAutofocus;
    use TDisabled;
    use TForm;
    use TMultiple;
    use TName;
    use TRequired;
    use TSize;

}