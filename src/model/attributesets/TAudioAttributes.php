<?php

namespace HEF\model\attributesets;

use HEF\model\attributes\TAutoplay;
use HEF\model\attributes\TBuffered;
use HEF\model\attributes\TControls;
use HEF\model\attributes\TCrossorigin;
use HEF\model\attributes\TLoop;
use HEF\model\attributes\TPreload;
use HEF\model\attributes\TSrc;


trait TAudioAttributes
{
    use TAutoplay;
    use TBuffered;
    use TControls;
    use TCrossorigin;
    use TLoop;
    use TPreload;
    use TSrc;

}