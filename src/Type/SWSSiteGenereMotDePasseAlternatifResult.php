<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSiteGenereMotDePasseAlternatifResult
{
    /**
     * @var string
     */
    private $MotDePasseAlternatif;

    /**
     * @return string
     */
    public function getMotDePasseAlternatif()
    {
        return $this->MotDePasseAlternatif;
    }

    /**
     * @param string $MotDePasseAlternatif
     * @return SWSSiteGenereMotDePasseAlternatifResult
     */
    public function withMotDePasseAlternatif($MotDePasseAlternatif)
    {
        $new = clone $this;
        $new->MotDePasseAlternatif = $MotDePasseAlternatif;

        return $new;
    }
}

