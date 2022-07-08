<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSMatriculeSalarieResult
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return SWSMatriculeSalarieResult
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }
}

