<?php

namespace HEF\model\attributesets;

use HEF\model\attributes\globals\TTitle;
use HEF\model\attributes\TMedia;
use HEF\model\attributes\TNonce;
use HEF\model\attributes\TScoped;
use HEF\model\attributes\TType;


trait TStyleAttributes
{
    use TMedia;
    use TNonce;
    use TScoped;
    use TType;
}