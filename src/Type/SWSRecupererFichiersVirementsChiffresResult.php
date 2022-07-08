<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSRecupererFichiersVirementsChiffresResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseRecupererFichierVirement
     */
    private $Arr_FichiersVirementsChiffres;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\BilanMatricules
     */
    private $BilanMatricules;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseRecupererFichierVirement
     */
    public function getArr_FichiersVirementsChiffres()
    {
        return $this->Arr_FichiersVirementsChiffres;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseRecupererFichierVirement $Arr_FichiersVirementsChiffres
     * @return SWSRecupererFichiersVirementsChiffresResult
     */
    public function withArr_FichiersVirementsChiffres($Arr_FichiersVirementsChiffres)
    {
        $new = clone $this;
        $new->Arr_FichiersVirementsChiffres = $Arr_FichiersVirementsChiffres;

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
     * @return SWSRecupererFichiersVirementsChiffresResult
     */
    public function withBilanMatricules($BilanMatricules)
    {
        $new = clone $this;
        $new->BilanMatricules = $BilanMatricules;

        return $new;
    }
}

