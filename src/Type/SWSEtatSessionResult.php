<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSEtatSessionResult
{
    /**
     * @var int
     */
    private $ErrorCode;

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     * @return SWSEtatSessionResult
     */
    public function withErrorCode($ErrorCode)
    {
        $new = clone $this;
        $new->ErrorCode = $ErrorCode;

        return $new;
    }
}

