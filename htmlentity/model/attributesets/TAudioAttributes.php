<?php

namespace htmlentity\model\attributesets;

use htmlentity\model\attributes\TAutoplay;
use htmlentity\model\attributes\TBuffered;
use htmlentity\model\attributes\TControls;
use htmlentity\model\attributes\TCrossorigin;
use htmlentity\model\attributes\TLoop;
use htmlentity\model\attributes\TPreload;
use htmlentity\model\attributes\TSrc;


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