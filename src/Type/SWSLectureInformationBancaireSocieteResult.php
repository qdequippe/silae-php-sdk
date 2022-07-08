<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureInformationBancaireSocieteResult
{
    /**
     * @var int
     */
    private $SepaModeComptabilisation;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationBancaireSociete
     */
    private $InformationBancaireSociete;

    /**
     * @return int
     */
    public function getSepaModeComptabilisation()
    {
        return $this->SepaModeComptabilisation;
    }

    /**
     * @param int $SepaModeComptabilisation
     * @return SWSLectureInformationBancaireSocieteResult
     */
    public function withSepaModeComptabilisation($SepaModeComptabilisation)
    {
        $new = clone $this;
        $new->SepaModeComptabilisation = $SepaModeComptabilisation;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationBancaireSociete
     */
    public function getInformationBancaireSociete()
    {
        return $this->InformationBancaireSociete;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationBancaireSociete $InformationBancaireSociete
     * @return SWSLectureInformationBancaireSocieteResult
     */
    public function withInformationBancaireSociete($InformationBancaireSociete)
    {
        $new = clone $this;
        $new->InformationBancaireSociete = $InformationBancaireSociete;

        return $new;
    }
}

