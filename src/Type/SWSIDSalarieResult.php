<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSIDSalarieResult
{
    /**
     * @var string
     */
    private $IDSalarie;

    /**
     * @return string
     */
    public function getIDSalarie()
    {
        return $this->IDSalarie;
    }

    /**
     * @param string $IDSalarie
     * @return SWSIDSalarieResult
     */
    public function withIDSalarie($IDSalarie)
    {
        $new = clone $this;
        $new->IDSalarie = $IDSalarie;

        return $new;
    }
}

