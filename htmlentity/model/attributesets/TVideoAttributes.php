<?php

namespace htmlentity\model\attributesets;

use htmlentity\model\attributes\TAutoplay;
use htmlentity\model\attributes\TBuffered;
use htmlentity\model\attributes\TControls;
use htmlentity\model\attributes\TCrossorigin;
use htmlentity\model\attributes\THeight;
use htmlentity\model\attributes\TLoop;
use htmlentity\model\attributes\TMuted;
use htmlentity\model\attributes\TPoster;
use htmlentity\model\attributes\TPreload;
use htmlentity\model\attributes\TSrc;
use htmlentity\model\attributes\TWidth;


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