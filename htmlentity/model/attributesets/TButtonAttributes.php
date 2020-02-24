<?php

namespace htmlentity\model\attributesets;

use htmlentity\model\attributes\TAutofocus;
use htmlentity\model\attributes\TDisabled;
use htmlentity\model\attributes\TForm;
use htmlentity\model\attributes\TFormaction;
use htmlentity\model\attributes\TName;
use htmlentity\model\attributes\TType;
use htmlentity\model\attributes\TValue;


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