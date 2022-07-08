<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSStringString
{
    /**
     * @var string
     */
    private $KeyStr;

    /**
     * @var string
     */
    private $Str;

    /**
     * @return string
     */
    public function getKeyStr()
    {
        return $this->KeyStr;
    }

    /**
     * @param string $KeyStr
     * @return CPAISWSStringString
     */
    public function withKeyStr($KeyStr)
    {
        $new = clone $this;
        $new->KeyStr = $KeyStr;

        return $new;
    }

    /**
     * @return string
     */
    public function getStr()
    {
        return $this->Str;
    }

    /**
     * @param string $Str
     * @return CPAISWSStringString
     */
    public function withStr($Str)
    {
        $new = clone $this;
        $new->Str = $Str;

        return $new;
    }
}

