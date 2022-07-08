<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEtatDeclarationRetour
{
    /**
     * @var \DateTimeInterface
     */
    private $Date;

    /**
     * @var string
     */
    private $Nature;

    /**
     * @var string
     */
    private $Etat;

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return CPAISWSEtatDeclarationRetour
     */
    public function withDate($Date)
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    /**
     * @return string
     */
    public function getNature()
    {
        return $this->Nature;
    }

    /**
     * @param string $Nature
     * @return CPAISWSEtatDeclarationRetour
     */
    public function withNature($Nature)
    {
        $new = clone $this;
        $new->Nature = $Nature;

        return $new;
    }

    /**
     * @return string
     */
    public function getEtat()
    {
        return $this->Etat;
    }

    /**
     * @param string $Etat
     * @return CPAISWSEtatDeclarationRetour
     */
    public function withEtat($Etat)
    {
        $new = clone $this;
        $new->Etat = $Etat;

        return $new;
    }
}

