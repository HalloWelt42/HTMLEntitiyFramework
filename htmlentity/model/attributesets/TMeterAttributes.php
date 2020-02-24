<?php

namespace htmlentity\model\attributesets;

use htmlentity\model\attributes\TForm;
use htmlentity\model\attributes\THigh;
use htmlentity\model\attributes\TLow;
use htmlentity\model\attributes\TMax;
use htmlentity\model\attributes\TMin;
use htmlentity\model\attributes\TOptimum;
use htmlentity\model\attributes\TValue;


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