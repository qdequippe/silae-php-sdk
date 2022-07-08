<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSDossierTache
{
    /**
     * @var int
     */
    private $Nature;

    /**
     * @var int
     */
    private $Jour;

    /**
     * @var int
     */
    private $Heure;

    /**
     * @var int
     */
    private $Minute;

    /**
     * @var string
     */
    private $Destinataire;

    /**
     * @var bool
     */
    private $AFaireParLeClient;

    /**
     * @var bool
     */
    private $OptionBool1;

    /**
     * @var bool
     */
    private $OptionBool2;

    /**
     * @var bool
     */
    private $OptionBool3;

    /**
     * @var string
     */
    private $OptionString1;

    /**
     * @var int
     */
    private $Rappel1_Jour;

    /**
     * @var int
     */
    private $Rappel1_Heure;

    /**
     * @var int
     */
    private $Rappel1_Minute;

    /**
     * @var string
     */
    private $Rappel1_Destinataire;

    /**
     * @var int
     */
    private $Rappel2_Jour;

    /**
     * @var int
     */
    private $Rappel2_Heure;

    /**
     * @var int
     */
    private $Rappel2_Minute;

    /**
     * @var string
     */
    private $Rappel2_Destinataire;

    /**
     * @var int
     */
    private $Rappel3_Jour;

    /**
     * @var int
     */
    private $Rappel3_Heure;

    /**
     * @var int
     */
    private $Rappel3_Minute;

    /**
     * @var string
     */
    private $Rappel3_Destinataire;

    /**
     * @var int
     */
    private $Rappel4_Jour;

    /**
     * @var int
     */
    private $Rappel4_Heure;

    /**
     * @var int
     */
    private $Rappel4_Minute;

    /**
     * @var string
     */
    private $Rappel4_Destinataire;

    /**
     * @var int
     */
    private $Rappel5_Jour;

    /**
     * @var int
     */
    private $Rappel5_Heure;

    /**
     * @var int
     */
    private $Rappel5_Minute;

    /**
     * @var string
     */
    private $Rappel5_Destinataire;

    /**
     * @var bool
     */
    private $SupprimerTache;

    /**
     * @return int
     */
    public function getNature()
    {
        return $this->Nature;
    }

    /**
     * @param int $Nature
     * @return CPAISWSDossierTache
     */
    public function withNature($Nature)
    {
        $new = clone $this;
        $new->Nature = $Nature;

        return $new;
    }

    /**
     * @return int
     */
    public function getJour()
    {
        return $this->Jour;
    }

    /**
     * @param int $Jour
     * @return CPAISWSDossierTache
     */
    public function withJour($Jour)
    {
        $new = clone $this;
        $new->Jour = $Jour;

        return $new;
    }

    /**
     * @return int
     */
    public function getHeure()
    {
        return $this->Heure;
    }

    /**
     * @param int $Heure
     * @return CPAISWSDossierTache
     */
    public function withHeure($Heure)
    {
        $new = clone $this;
        $new->Heure = $Heure;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinute()
    {
        return $this->Minute;
    }

    /**
     * @param int $Minute
     * @return CPAISWSDossierTache
     */
    public function withMinute($Minute)
    {
        $new = clone $this;
        $new->Minute = $Minute;

        return $new;
    }

    /**
     * @return string
     */
    public function getDestinataire()
    {
        return $this->Destinataire;
    }

    /**
     * @param string $Destinataire
     * @return CPAISWSDossierTache
     */
    public function withDestinataire($Destinataire)
    {
        $new = clone $this;
        $new->Destinataire = $Destinataire;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAFaireParLeClient()
    {
        return $this->AFaireParLeClient;
    }

    /**
     * @param bool $AFaireParLeClient
     * @return CPAISWSDossierTache
     */
    public function withAFaireParLeClient($AFaireParLeClient)
    {
        $new = clone $this;
        $new->AFaireParLeClient = $AFaireParLeClient;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOptionBool1()
    {
        return $this->OptionBool1;
    }

    /**
     * @param bool $OptionBool1
     * @return CPAISWSDossierTache
     */
    public function withOptionBool1($OptionBool1)
    {
        $new = clone $this;
        $new->OptionBool1 = $OptionBool1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOptionBool2()
    {
        return $this->OptionBool2;
    }

    /**
     * @param bool $OptionBool2
     * @return CPAISWSDossierTache
     */
    public function withOptionBool2($OptionBool2)
    {
        $new = clone $this;
        $new->OptionBool2 = $OptionBool2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOptionBool3()
    {
        return $this->OptionBool3;
    }

    /**
     * @param bool $OptionBool3
     * @return CPAISWSDossierTache
     */
    public function withOptionBool3($OptionBool3)
    {
        $new = clone $this;
        $new->OptionBool3 = $OptionBool3;

        return $new;
    }

    /**
     * @return string
     */
    public function getOptionString1()
    {
        return $this->OptionString1;
    }

    /**
     * @param string $OptionString1
     * @return CPAISWSDossierTache
     */
    public function withOptionString1($OptionString1)
    {
        $new = clone $this;
        $new->OptionString1 = $OptionString1;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel1_Jour()
    {
        return $this->Rappel1_Jour;
    }

    /**
     * @param int $Rappel1_Jour
     * @return CPAISWSDossierTache
     */
    public function withRappel1_Jour($Rappel1_Jour)
    {
        $new = clone $this;
        $new->Rappel1_Jour = $Rappel1_Jour;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel1_Heure()
    {
        return $this->Rappel1_Heure;
    }

    /**
     * @param int $Rappel1_Heure
     * @return CPAISWSDossierTache
     */
    public function withRappel1_Heure($Rappel1_Heure)
    {
        $new = clone $this;
        $new->Rappel1_Heure = $Rappel1_Heure;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel1_Minute()
    {
        return $this->Rappel1_Minute;
    }

    /**
     * @param int $Rappel1_Minute
     * @return CPAISWSDossierTache
     */
    public function withRappel1_Minute($Rappel1_Minute)
    {
        $new = clone $this;
        $new->Rappel1_Minute = $Rappel1_Minute;

        return $new;
    }

    /**
     * @return string
     */
    public function getRappel1_Destinataire()
    {
        return $this->Rappel1_Destinataire;
    }

    /**
     * @param string $Rappel1_Destinataire
     * @return CPAISWSDossierTache
     */
    public function withRappel1_Destinataire($Rappel1_Destinataire)
    {
        $new = clone $this;
        $new->Rappel1_Destinataire = $Rappel1_Destinataire;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel2_Jour()
    {
        return $this->Rappel2_Jour;
    }

    /**
     * @param int $Rappel2_Jour
     * @return CPAISWSDossierTache
     */
    public function withRappel2_Jour($Rappel2_Jour)
    {
        $new = clone $this;
        $new->Rappel2_Jour = $Rappel2_Jour;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel2_Heure()
    {
        return $this->Rappel2_Heure;
    }

    /**
     * @param int $Rappel2_Heure
     * @return CPAISWSDossierTache
     */
    public function withRappel2_Heure($Rappel2_Heure)
    {
        $new = clone $this;
        $new->Rappel2_Heure = $Rappel2_Heure;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel2_Minute()
    {
        return $this->Rappel2_Minute;
    }

    /**
     * @param int $Rappel2_Minute
     * @return CPAISWSDossierTache
     */
    public function withRappel2_Minute($Rappel2_Minute)
    {
        $new = clone $this;
        $new->Rappel2_Minute = $Rappel2_Minute;

        return $new;
    }

    /**
     * @return string
     */
    public function getRappel2_Destinataire()
    {
        return $this->Rappel2_Destinataire;
    }

    /**
     * @param string $Rappel2_Destinataire
     * @return CPAISWSDossierTache
     */
    public function withRappel2_Destinataire($Rappel2_Destinataire)
    {
        $new = clone $this;
        $new->Rappel2_Destinataire = $Rappel2_Destinataire;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel3_Jour()
    {
        return $this->Rappel3_Jour;
    }

    /**
     * @param int $Rappel3_Jour
     * @return CPAISWSDossierTache
     */
    public function withRappel3_Jour($Rappel3_Jour)
    {
        $new = clone $this;
        $new->Rappel3_Jour = $Rappel3_Jour;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel3_Heure()
    {
        return $this->Rappel3_Heure;
    }

    /**
     * @param int $Rappel3_Heure
     * @return CPAISWSDossierTache
     */
    public function withRappel3_Heure($Rappel3_Heure)
    {
        $new = clone $this;
        $new->Rappel3_Heure = $Rappel3_Heure;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel3_Minute()
    {
        return $this->Rappel3_Minute;
    }

    /**
     * @param int $Rappel3_Minute
     * @return CPAISWSDossierTache
     */
    public function withRappel3_Minute($Rappel3_Minute)
    {
        $new = clone $this;
        $new->Rappel3_Minute = $Rappel3_Minute;

        return $new;
    }

    /**
     * @return string
     */
    public function getRappel3_Destinataire()
    {
        return $this->Rappel3_Destinataire;
    }

    /**
     * @param string $Rappel3_Destinataire
     * @return CPAISWSDossierTache
     */
    public function withRappel3_Destinataire($Rappel3_Destinataire)
    {
        $new = clone $this;
        $new->Rappel3_Destinataire = $Rappel3_Destinataire;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel4_Jour()
    {
        return $this->Rappel4_Jour;
    }

    /**
     * @param int $Rappel4_Jour
     * @return CPAISWSDossierTache
     */
    public function withRappel4_Jour($Rappel4_Jour)
    {
        $new = clone $this;
        $new->Rappel4_Jour = $Rappel4_Jour;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel4_Heure()
    {
        return $this->Rappel4_Heure;
    }

    /**
     * @param int $Rappel4_Heure
     * @return CPAISWSDossierTache
     */
    public function withRappel4_Heure($Rappel4_Heure)
    {
        $new = clone $this;
        $new->Rappel4_Heure = $Rappel4_Heure;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel4_Minute()
    {
        return $this->Rappel4_Minute;
    }

    /**
     * @param int $Rappel4_Minute
     * @return CPAISWSDossierTache
     */
    public function withRappel4_Minute($Rappel4_Minute)
    {
        $new = clone $this;
        $new->Rappel4_Minute = $Rappel4_Minute;

        return $new;
    }

    /**
     * @return string
     */
    public function getRappel4_Destinataire()
    {
        return $this->Rappel4_Destinataire;
    }

    /**
     * @param string $Rappel4_Destinataire
     * @return CPAISWSDossierTache
     */
    public function withRappel4_Destinataire($Rappel4_Destinataire)
    {
        $new = clone $this;
        $new->Rappel4_Destinataire = $Rappel4_Destinataire;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel5_Jour()
    {
        return $this->Rappel5_Jour;
    }

    /**
     * @param int $Rappel5_Jour
     * @return CPAISWSDossierTache
     */
    public function withRappel5_Jour($Rappel5_Jour)
    {
        $new = clone $this;
        $new->Rappel5_Jour = $Rappel5_Jour;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel5_Heure()
    {
        return $this->Rappel5_Heure;
    }

    /**
     * @param int $Rappel5_Heure
     * @return CPAISWSDossierTache
     */
    public function withRappel5_Heure($Rappel5_Heure)
    {
        $new = clone $this;
        $new->Rappel5_Heure = $Rappel5_Heure;

        return $new;
    }

    /**
     * @return int
     */
    public function getRappel5_Minute()
    {
        return $this->Rappel5_Minute;
    }

    /**
     * @param int $Rappel5_Minute
     * @return CPAISWSDossierTache
     */
    public function withRappel5_Minute($Rappel5_Minute)
    {
        $new = clone $this;
        $new->Rappel5_Minute = $Rappel5_Minute;

        return $new;
    }

    /**
     * @return string
     */
    public function getRappel5_Destinataire()
    {
        return $this->Rappel5_Destinataire;
    }

    /**
     * @param string $Rappel5_Destinataire
     * @return CPAISWSDossierTache
     */
    public function withRappel5_Destinataire($Rappel5_Destinataire)
    {
        $new = clone $this;
        $new->Rappel5_Destinataire = $Rappel5_Destinataire;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSupprimerTache()
    {
        return $this->SupprimerTache;
    }

    /**
     * @param bool $SupprimerTache
     * @return CPAISWSDossierTache
     */
    public function withSupprimerTache($SupprimerTache)
    {
        $new = clone $this;
        $new->SupprimerTache = $SupprimerTache;

        return $new;
    }
}

