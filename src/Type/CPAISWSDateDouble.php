<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSDateDouble
{
    /**
     * @var \DateTimeInterface
     */
    private $KeyDt;

    /**
     * @var float
     */
    private $Dbl;

    /**
     * @return \DateTimeInterface
     */
    public function getKeyDt()
    {
        return $this->KeyDt;
    }

    /**
     * @param \DateTimeInterface $KeyDt
     * @return CPAISWSDateDouble
     */
    public function withKeyDt($KeyDt)
    {
        $new = clone $this;
        $new->KeyDt = $KeyDt;

        return $new;
    }

    /**
     * @return float
     */
    public function getDbl()
    {
        return $this->Dbl;
    }

    /**
     * @param float $Dbl
     * @return CPAISWSDateDouble
     */
    public function withDbl($Dbl)
    {
        $new = clone $this;
        $new->Dbl = $Dbl;

        return $new;
    }
}

