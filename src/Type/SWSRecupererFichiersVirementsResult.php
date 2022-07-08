<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSRecupererFichiersVirementsResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseRecupererFichierVirement
     */
    private $Arr_FichiersVirements;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\BilanMatricules
     */
    private $BilanMatricules;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseRecupererFichierVirement
     */
    public function getArr_FichiersVirements()
    {
        return $this->Arr_FichiersVirements;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseRecupererFichierVirement $Arr_FichiersVirements
     * @return SWSRecupererFichiersVirementsResult
     */
    public function withArr_FichiersVirements($Arr_FichiersVirements)
    {
        $new = clone $this;
        $new->Arr_FichiersVirements = $Arr_FichiersVirements;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\BilanMatricules
     */
    public function getBilanMatricules()
    {
        return $this->BilanMatricules;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\BilanMatricules $BilanMatricules
     * @return SWSRecupererFichiersVirementsResult
     */
    public function withBilanMatricules($BilanMatricules)
    {
        $new = clone $this;
        $new->BilanMatricules = $BilanMatricules;

        return $new;
    }
}

