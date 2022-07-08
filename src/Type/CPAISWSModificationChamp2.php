<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSModificationChamp2
{
    /**
     * @var string
     */
    private $NomChamp;

    /**
     * @var string
     */
    private $TypeValeur;

    /**
     * @var int
     */
    private $ValeurINT32;

    /**
     * @var float
     */
    private $ValeurDOUBLE;

    /**
     * @var string
     */
    private $ValeurSTRING;

    /**
     * @var \DateTimeInterface
     */
    private $ValeurDATETIME;

    /**
     * @var int
     */
    private $ValeurBYTE;

    /**
     * @var bool
     */
    private $ValeurBOOL;

    /**
     * @return string
     */
    public function getNomChamp()
    {
        return $this->NomChamp;
    }

    /**
     * @param string $NomChamp
     * @return CPAISWSModificationChamp2
     */
    public function withNomChamp($NomChamp)
    {
        $new = clone $this;
        $new->NomChamp = $NomChamp;

        return $new;
    }

    /**
     * @return string
     */
    public function getTypeValeur()
    {
        return $this->TypeValeur;
    }

    /**
     * @param string $TypeValeur
     * @return CPAISWSModificationChamp2
     */
    public function withTypeValeur($TypeValeur)
    {
        $new = clone $this;
        $new->TypeValeur = $TypeValeur;

        return $new;
    }

    /**
     * @return int
     */
    public function getValeurINT32()
    {
        return $this->ValeurINT32;
    }

    /**
     * @param int $ValeurINT32
     * @return CPAISWSModificationChamp2
     */
    public function withValeurINT32($ValeurINT32)
    {
        $new = clone $this;
        $new->ValeurINT32 = $ValeurINT32;

        return $new;
    }

    /**
     * @return float
     */
    public function getValeurDOUBLE()
    {
        return $this->ValeurDOUBLE;
    }

    /**
     * @param float $ValeurDOUBLE
     * @return CPAISWSModificationChamp2
     */
    public function withValeurDOUBLE($ValeurDOUBLE)
    {
        $new = clone $this;
        $new->ValeurDOUBLE = $ValeurDOUBLE;

        return $new;
    }

    /**
     * @return string
     */
    public function getValeurSTRING()
    {
        return $this->ValeurSTRING;
    }

    /**
     * @param string $ValeurSTRING
     * @return CPAISWSModificationChamp2
     */
    public function withValeurSTRING($ValeurSTRING)
    {
        $new = clone $this;
        $new->ValeurSTRING = $ValeurSTRING;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getValeurDATETIME()
    {
        return $this->ValeurDATETIME;
    }

    /**
     * @param \DateTimeInterface $ValeurDATETIME
     * @return CPAISWSModificationChamp2
     */
    public function withValeurDATETIME($ValeurDATETIME)
    {
        $new = clone $this;
        $new->ValeurDATETIME = $ValeurDATETIME;

        return $new;
    }

    /**
     * @return int
     */
    public function getValeurBYTE()
    {
        return $this->ValeurBYTE;
    }

    /**
     * @param int $ValeurBYTE
     * @return CPAISWSModificationChamp2
     */
    public function withValeurBYTE($ValeurBYTE)
    {
        $new = clone $this;
        $new->ValeurBYTE = $ValeurBYTE;

        return $new;
    }

    /**
     * @return bool
     */
    public function getValeurBOOL()
    {
        return $this->ValeurBOOL;
    }

    /**
     * @param bool $ValeurBOOL
     * @return CPAISWSModificationChamp2
     */
    public function withValeurBOOL($ValeurBOOL)
    {
        $new = clone $this;
        $new->ValeurBOOL = $ValeurBOOL;

        return $new;
    }
}

