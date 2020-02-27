<?php

namespace HEF\model\attributesets;

use HEF\model\attributes\TAutoplay;
use HEF\model\attributes\TBuffered;
use HEF\model\attributes\TControls;
use HEF\model\attributes\TCrossorigin;
use HEF\model\attributes\THeight;
use HEF\model\attributes\TLoop;
use HEF\model\attributes\TMuted;
use HEF\model\attributes\TPoster;
use HEF\model\attributes\TPreload;
use HEF\model\attributes\TSrc;
use HEF\model\attributes\TWidth;


trait TVideoAttributes
{
    use TAutoplay;
    use TBuffered;
    use TControls;
    use TCrossorigin;
    use THeight;
    use TLoop;
    use TMuted;
    use TPoster;
    use TPreload;
    use TSrc;
    use TWidth;

}