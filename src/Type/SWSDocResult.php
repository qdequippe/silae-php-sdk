<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSDocResult
{
    /**
     * @var string
     */
    private $r1;

    /**
     * @return string
     */
    public function getR1()
    {
        return $this->r1;
    }

    /**
     * @param string $r1
     * @return SWSDocResult
     */
    public function withR1($r1)
    {
        $new = clone $this;
        $new->r1 = $r1;

        return $new;
    }
}

