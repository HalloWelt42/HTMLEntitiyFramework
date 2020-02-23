<?php

namespace htmlentity\model\attributesets;

use htmlentity\model\attributes\globals\TTitle;
use htmlentity\model\attributes\TMedia;
use htmlentity\model\attributes\TNonce;
use htmlentity\model\attributes\TScoped;
use htmlentity\model\attributes\TType;


trait TStyleAttributes
{
    use TMedia;
    use TNonce;
    use TScoped;
    use TType;
}