<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSReponseLectureInfos
{
    /**
     * @var string
     */
    private $Champ;

    /**
     * @var mixed
     */
    private $Valeur;

    /**
     * @return string
     */
    public function getChamp()
    {
        return $this->Champ;
    }

    /**
     * @param string $Champ
     * @return CPAISWSReponseLectureInfos
     */
    public function withChamp($Champ)
    {
        $new = clone $this;
        $new->Champ = $Champ;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->Valeur;
    }

    /**
     * @param mixed $Valeur
     * @return CPAISWSReponseLectureInfos
     */
    public function withValeur($Valeur)
    {
        $new = clone $this;
        $new->Valeur = $Valeur;

        return $new;
    }
}

