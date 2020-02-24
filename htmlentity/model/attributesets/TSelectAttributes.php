<?php

namespace htmlentity\model\attributesets;

use htmlentity\model\attributes\TAutofocus;
use htmlentity\model\attributes\TDisabled;
use htmlentity\model\attributes\TForm;
use htmlentity\model\attributes\TMultiple;
use htmlentity\model\attributes\TName;
use htmlentity\model\attributes\TRequired;
use htmlentity\model\attributes\TSize;


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