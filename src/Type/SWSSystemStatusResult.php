<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSystemStatusResult
{
    /**
     * @var string
     */
    private $Status;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return SWSSystemStatusResult
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }
}

