<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieEmploiElementsVariablesTM
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM
     */
    private $Salarie;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiTM
     */
    private $Emploi;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSaisieElementVariableTM
     */
    private $Contenu;

    /**
     * @var int
     */
    private $TypeBulletin;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM
     */
    public function getSalarie()
    {
        return $this->Salarie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM $Salarie
     * @return CPAISWSSalarieEmploiElementsVariablesTM
     */
    public function withSalarie($Salarie)
    {
        $new = clone $this;
        $new->Salarie = $Salarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiTM
     */
    public function getEmploi()
    {
        return $this->Emploi;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiTM $Emploi
     * @return CPAISWSSalarieEmploiElementsVariablesTM
     */
    public function withEmploi($Emploi)
    {
        $new = clone $this;
        $new->Emploi = $Emploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSaisieElementVariableTM
     */
    public function getContenu()
    {
        return $this->Contenu;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSaisieElementVariableTM $Contenu
     * @return CPAISWSSalarieEmploiElementsVariablesTM
     */
    public function withContenu($Contenu)
    {
        $new = clone $this;
        $new->Contenu = $Contenu;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeBulletin()
    {
        return $this->TypeBulletin;
    }

    /**
     * @param int $TypeBulletin
     * @return CPAISWSSalarieEmploiElementsVariablesTM
     */
    public function withTypeBulletin($TypeBulletin)
    {
        $new = clone $this;
        $new->TypeBulletin = $TypeBulletin;

        return $new;
    }
}

