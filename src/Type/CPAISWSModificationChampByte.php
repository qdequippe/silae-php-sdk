<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSModificationChampByte
{
    /**
     * @var string
     */
    private $NomChamp;

    /**
     * @var int
     */
    private $ValeurByte;

    /**
     * @return string
     */
    public function getNomChamp()
    {
        return $this->NomChamp;
    }

    /**
     * @param string $NomChamp
     * @return CPAISWSModificationChampByte
     */
    public function withNomChamp($NomChamp)
    {
        $new = clone $this;
        $new->NomChamp = $NomChamp;

        return $new;
    }

    /**
     * @return int
     */
    public function getValeurByte()
    {
        return $this->ValeurByte;
    }

    /**
     * @param int $ValeurByte
     * @return CPAISWSModificationChampByte
     */
    public function withValeurByte($ValeurByte)
    {
        $new = clone $this;
        $new->ValeurByte = $ValeurByte;

        return $new;
    }
}

