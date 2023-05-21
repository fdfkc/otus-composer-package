<?php

declare(strict_types = 1);

namespace fdfkc\otusComposerPackage;

class TimeProcessor
{
    public function getCurrentYear() :string
    {
        return date("Y");
    }
}
