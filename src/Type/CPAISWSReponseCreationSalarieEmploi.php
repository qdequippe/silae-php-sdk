<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSReponseCreationSalarieEmploi
{
    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var string
     */
    private $Error;

    /**
     * @return int
     */
    public function getIdentifiantEmploi()
    {
        return $this->IdentifiantEmploi;
    }

    /**
     * @param int $IdentifiantEmploi
     * @return CPAISWSReponseCreationSalarieEmploi
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * @param string $Error
     * @return CPAISWSReponseCreationSalarieEmploi
     */
    public function withError($Error)
    {
        $new = clone $this;
        $new->Error = $Error;

        return $new;
    }
}

