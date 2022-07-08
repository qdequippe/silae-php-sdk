<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSBaseResult
{
    /**
     * @var string
     */
    private $Error;

    /**
     * @return string
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * @param string $Error
     * @return SWSBaseResult
     */
    public function withError($Error)
    {
        $new = clone $this;
        $new->Error = $Error;

        return $new;
    }
}

