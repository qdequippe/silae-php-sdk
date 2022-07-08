<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieDUE
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var string
     */
    private $NomInterneEtablissement;

    /**
     * @var \DateTimeInterface
     */
    private $DateEmbauche;

    /**
     * @var \DateTimeInterface
     */
    private $DateFinContrat;

    /**
     * @var int
     */
    private $TypeContrat;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSSalarieDUE
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomInterneEtablissement()
    {
        return $this->NomInterneEtablissement;
    }

    /**
     * @param string $NomInterneEtablissement
     * @return CPAISWSSalarieDUE
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateEmbauche()
    {
        return $this->DateEmbauche;
    }

    /**
     * @param \DateTimeInterface $DateEmbauche
     * @return CPAISWSSalarieDUE
     */
    public function withDateEmbauche($DateEmbauche)
    {
        $new = clone $this;
        $new->DateEmbauche = $DateEmbauche;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateFinContrat()
    {
        return $this->DateFinContrat;
    }

    /**
     * @param \DateTimeInterface $DateFinContrat
     * @return CPAISWSSalarieDUE
     */
    public function withDateFinContrat($DateFinContrat)
    {
        $new = clone $this;
        $new->DateFinContrat = $DateFinContrat;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeContrat()
    {
        return $this->TypeContrat;
    }

    /**
     * @param int $TypeContrat
     * @return CPAISWSSalarieDUE
     */
    public function withTypeContrat($TypeContrat)
    {
        $new = clone $this;
        $new->TypeContrat = $TypeContrat;

        return $new;
    }
}

