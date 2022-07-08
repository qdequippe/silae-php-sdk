<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSStringDouble
{
    /**
     * @var string
     */
    private $KeyStr;

    /**
     * @var float
     */
    private $Dbl;

    /**
     * @return string
     */
    public function getKeyStr()
    {
        return $this->KeyStr;
    }

    /**
     * @param string $KeyStr
     * @return CPAISWSStringDouble
     */
    public function withKeyStr($KeyStr)
    {
        $new = clone $this;
        $new->KeyStr = $KeyStr;

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
     * @return CPAISWSStringDouble
     */
    public function withDbl($Dbl)
    {
        $new = clone $this;
        $new->Dbl = $Dbl;

        return $new;
    }
}

