<?php

namespace HEF\model\attributesets;

use HEF\model\attributes\TForm;
use HEF\model\attributes\THigh;
use HEF\model\attributes\TLow;
use HEF\model\attributes\TMax;
use HEF\model\attributes\TMin;
use HEF\model\attributes\TOptimum;
use HEF\model\attributes\TValue;


trait TMeterAttributes
{
    use TForm;
    use THigh;
    use TLow;
    use TMax;
    use TMin;
    use TOptimum;
    use TValue;

}