<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSImportXmlParametrageOrganismeDSNResult
{
    /**
     * @var string
     */
    private $CompteRendu;

    /**
     * @var string
     */
    private $TraitementGlobal;

    /**
     * @return string
     */
    public function getCompteRendu()
    {
        return $this->CompteRendu;
    }

    /**
     * @param string $CompteRendu
     * @return SWSImportXmlParametrageOrganismeDSNResult
     */
    public function withCompteRendu($CompteRendu)
    {
        $new = clone $this;
        $new->CompteRendu = $CompteRendu;

        return $new;
    }

    /**
     * @return string
     */
    public function getTraitementGlobal()
    {
        return $this->TraitementGlobal;
    }

    /**
     * @param string $TraitementGlobal
     * @return SWSImportXmlParametrageOrganismeDSNResult
     */
    public function withTraitementGlobal($TraitementGlobal)
    {
        $new = clone $this;
        $new->TraitementGlobal = $TraitementGlobal;

        return $new;
    }
}

