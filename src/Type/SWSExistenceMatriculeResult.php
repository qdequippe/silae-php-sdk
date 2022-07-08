<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSExistenceMatriculeResult
{
    /**
     * @var bool
     */
    private $Existe;

    /**
     * @return bool
     */
    public function getExiste()
    {
        return $this->Existe;
    }

    /**
     * @param bool $Existe
     * @return SWSExistenceMatriculeResult
     */
    public function withExiste($Existe)
    {
        $new = clone $this;
        $new->Existe = $Existe;

        return $new;
    }
}

