<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalarieSalaireDeBaseResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieSalaireDeBase
     */
    private $SalarieSalaireDeBase;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieSalaireDeBase
     */
    public function getSalarieSalaireDeBase()
    {
        return $this->SalarieSalaireDeBase;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieSalaireDeBase $SalarieSalaireDeBase
     * @return SWSSalarieSalaireDeBaseResult
     */
    public function withSalarieSalaireDeBase($SalarieSalaireDeBase)
    {
        $new = clone $this;
        $new->SalarieSalaireDeBase = $SalarieSalaireDeBase;

        return $new;
    }
}

