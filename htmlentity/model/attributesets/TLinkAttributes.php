<?php

namespace htmlentity\model\attributesets;

use htmlentity\model\attributes\TCrossorigin;
use htmlentity\model\attributes\THref;
use htmlentity\model\attributes\THreflang;
use htmlentity\model\attributes\TIntegrity;
use htmlentity\model\attributes\TMedia;
use htmlentity\model\attributes\TRel;
use htmlentity\model\attributes\TSizes;


trait TLinkAttributes
{
    use TCrossorigin;
    use THref;
    use THreflang;
    use TIntegrity;
    use TMedia;
    use TRel;
    use TSizes;

}