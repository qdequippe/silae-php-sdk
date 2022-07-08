<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSRecuperationListeEVResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfElementVariable
     */
    private $ListeElementsVariables;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfSalarie
     */
    private $ListeSalaries;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfElementVariable
     */
    public function getListeElementsVariables()
    {
        return $this->ListeElementsVariables;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfElementVariable $ListeElementsVariables
     * @return SWSRecuperationListeEVResult
     */
    public function withListeElementsVariables($ListeElementsVariables)
    {
        $new = clone $this;
        $new->ListeElementsVariables = $ListeElementsVariables;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfSalarie
     */
    public function getListeSalaries()
    {
        return $this->ListeSalaries;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfSalarie $ListeSalaries
     * @return SWSRecuperationListeEVResult
     */
    public function withListeSalaries($ListeSalaries)
    {
        $new = clone $this;
        $new->ListeSalaries = $ListeSalaries;

        return $new;
    }
}

