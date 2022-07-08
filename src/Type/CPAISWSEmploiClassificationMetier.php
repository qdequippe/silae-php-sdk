<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEmploiClassificationMetier
{
    /**
     * @var string
     */
    private $CodeClassificationMetier;

    /**
     * @var string
     */
    private $CLM_Libelle;

    /**
     * @var string
     */
    private $CLM_CodeConventionCollective;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CLM_CodesCSP;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CLM_CodesStatutProfessionnel;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CLM_CodesStatutCategoriel;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CLM_CodesStatutCategorielAgircArrco;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CLM_CodesCPNDUC;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CLM_Coefficients1;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CLM_Coefficients2;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CLM_Coefficients3;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CLM_Coefficients4;

    /**
     * @return string
     */
    public function getCodeClassificationMetier()
    {
        return $this->CodeClassificationMetier;
    }

    /**
     * @param string $CodeClassificationMetier
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCodeClassificationMetier($CodeClassificationMetier)
    {
        $new = clone $this;
        $new->CodeClassificationMetier = $CodeClassificationMetier;

        return $new;
    }

    /**
     * @return string
     */
    public function getCLM_Libelle()
    {
        return $this->CLM_Libelle;
    }

    /**
     * @param string $CLM_Libelle
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCLM_Libelle($CLM_Libelle)
    {
        $new = clone $this;
        $new->CLM_Libelle = $CLM_Libelle;

        return $new;
    }

    /**
     * @return string
     */
    public function getCLM_CodeConventionCollective()
    {
        return $this->CLM_CodeConventionCollective;
    }

    /**
     * @param string $CLM_CodeConventionCollective
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCLM_CodeConventionCollective($CLM_CodeConventionCollective)
    {
        $new = clone $this;
        $new->CLM_CodeConventionCollective = $CLM_CodeConventionCollective;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCLM_CodesCSP()
    {
        return $this->CLM_CodesCSP;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CLM_CodesCSP
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCLM_CodesCSP($CLM_CodesCSP)
    {
        $new = clone $this;
        $new->CLM_CodesCSP = $CLM_CodesCSP;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCLM_CodesStatutProfessionnel()
    {
        return $this->CLM_CodesStatutProfessionnel;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CLM_CodesStatutProfessionnel
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCLM_CodesStatutProfessionnel($CLM_CodesStatutProfessionnel)
    {
        $new = clone $this;
        $new->CLM_CodesStatutProfessionnel = $CLM_CodesStatutProfessionnel;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCLM_CodesStatutCategoriel()
    {
        return $this->CLM_CodesStatutCategoriel;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CLM_CodesStatutCategoriel
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCLM_CodesStatutCategoriel($CLM_CodesStatutCategoriel)
    {
        $new = clone $this;
        $new->CLM_CodesStatutCategoriel = $CLM_CodesStatutCategoriel;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCLM_CodesStatutCategorielAgircArrco()
    {
        return $this->CLM_CodesStatutCategorielAgircArrco;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CLM_CodesStatutCategorielAgircArrco
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCLM_CodesStatutCategorielAgircArrco($CLM_CodesStatutCategorielAgircArrco)
    {
        $new = clone $this;
        $new->CLM_CodesStatutCategorielAgircArrco = $CLM_CodesStatutCategorielAgircArrco;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCLM_CodesCPNDUC()
    {
        return $this->CLM_CodesCPNDUC;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CLM_CodesCPNDUC
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCLM_CodesCPNDUC($CLM_CodesCPNDUC)
    {
        $new = clone $this;
        $new->CLM_CodesCPNDUC = $CLM_CodesCPNDUC;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCLM_Coefficients1()
    {
        return $this->CLM_Coefficients1;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CLM_Coefficients1
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCLM_Coefficients1($CLM_Coefficients1)
    {
        $new = clone $this;
        $new->CLM_Coefficients1 = $CLM_Coefficients1;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCLM_Coefficients2()
    {
        return $this->CLM_Coefficients2;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CLM_Coefficients2
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCLM_Coefficients2($CLM_Coefficients2)
    {
        $new = clone $this;
        $new->CLM_Coefficients2 = $CLM_Coefficients2;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCLM_Coefficients3()
    {
        return $this->CLM_Coefficients3;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CLM_Coefficients3
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCLM_Coefficients3($CLM_Coefficients3)
    {
        $new = clone $this;
        $new->CLM_Coefficients3 = $CLM_Coefficients3;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCLM_Coefficients4()
    {
        return $this->CLM_Coefficients4;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CLM_Coefficients4
     * @return CPAISWSEmploiClassificationMetier
     */
    public function withCLM_Coefficients4($CLM_Coefficients4)
    {
        $new = clone $this;
        $new->CLM_Coefficients4 = $CLM_Coefficients4;

        return $new;
    }
}

