<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSPortailVisiteMedicale
{
    /**
     * @var int
     */
    private $ID_PAISALARIE;

    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var string
     */
    private $NomSalarie;

    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var string
     */
    private $NatureEmploi;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailCentreMedical
     */
    private $Centre;

    /**
     * @var string
     */
    private $CodeMT;

    /**
     * @var \DateTimeInterface
     */
    private $DateHeureConvocation;

    /**
     * @var \DateTimeInterface
     */
    private $DateHeureVisite;

    /**
     * @var string
     */
    private $HeureFinVisite;

    /**
     * @var int
     */
    private $Nature;

    /**
     * @var int
     */
    private $NatureDetail;

    /**
     * @var int
     */
    private $Conclusion;

    /**
     * @var \DateTimeInterface
     */
    private $DateContreVisite;

    /**
     * @var string
     */
    private $ConclusionDetail;

    /**
     * @var int
     */
    private $TypePraticien;

    /**
     * @var string
     */
    private $Commentaire;

    /**
     * @return int
     */
    public function getID_PAISALARIE()
    {
        return $this->ID_PAISALARIE;
    }

    /**
     * @param int $ID_PAISALARIE
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSPortailVisiteMedicale
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
    public function getNomSalarie()
    {
        return $this->NomSalarie;
    }

    /**
     * @param string $NomSalarie
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withNomSalarie($NomSalarie)
    {
        $new = clone $this;
        $new->NomSalarie = $NomSalarie;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifiantEmploi()
    {
        return $this->IdentifiantEmploi;
    }

    /**
     * @param int $IdentifiantEmploi
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return string
     */
    public function getNatureEmploi()
    {
        return $this->NatureEmploi;
    }

    /**
     * @param string $NatureEmploi
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withNatureEmploi($NatureEmploi)
    {
        $new = clone $this;
        $new->NatureEmploi = $NatureEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailCentreMedical
     */
    public function getCentre()
    {
        return $this->Centre;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailCentreMedical $Centre
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withCentre($Centre)
    {
        $new = clone $this;
        $new->Centre = $Centre;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeMT()
    {
        return $this->CodeMT;
    }

    /**
     * @param string $CodeMT
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withCodeMT($CodeMT)
    {
        $new = clone $this;
        $new->CodeMT = $CodeMT;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateHeureConvocation()
    {
        return $this->DateHeureConvocation;
    }

    /**
     * @param \DateTimeInterface $DateHeureConvocation
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withDateHeureConvocation($DateHeureConvocation)
    {
        $new = clone $this;
        $new->DateHeureConvocation = $DateHeureConvocation;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateHeureVisite()
    {
        return $this->DateHeureVisite;
    }

    /**
     * @param \DateTimeInterface $DateHeureVisite
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withDateHeureVisite($DateHeureVisite)
    {
        $new = clone $this;
        $new->DateHeureVisite = $DateHeureVisite;

        return $new;
    }

    /**
     * @return string
     */
    public function getHeureFinVisite()
    {
        return $this->HeureFinVisite;
    }

    /**
     * @param string $HeureFinVisite
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withHeureFinVisite($HeureFinVisite)
    {
        $new = clone $this;
        $new->HeureFinVisite = $HeureFinVisite;

        return $new;
    }

    /**
     * @return int
     */
    public function getNature()
    {
        return $this->Nature;
    }

    /**
     * @param int $Nature
     * @return CPAISWSPortailVisiteMedicale
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
    public function getNatureDetail()
    {
        return $this->NatureDetail;
    }

    /**
     * @param int $NatureDetail
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withNatureDetail($NatureDetail)
    {
        $new = clone $this;
        $new->NatureDetail = $NatureDetail;

        return $new;
    }

    /**
     * @return int
     */
    public function getConclusion()
    {
        return $this->Conclusion;
    }

    /**
     * @param int $Conclusion
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withConclusion($Conclusion)
    {
        $new = clone $this;
        $new->Conclusion = $Conclusion;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateContreVisite()
    {
        return $this->DateContreVisite;
    }

    /**
     * @param \DateTimeInterface $DateContreVisite
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withDateContreVisite($DateContreVisite)
    {
        $new = clone $this;
        $new->DateContreVisite = $DateContreVisite;

        return $new;
    }

    /**
     * @return string
     */
    public function getConclusionDetail()
    {
        return $this->ConclusionDetail;
    }

    /**
     * @param string $ConclusionDetail
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withConclusionDetail($ConclusionDetail)
    {
        $new = clone $this;
        $new->ConclusionDetail = $ConclusionDetail;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypePraticien()
    {
        return $this->TypePraticien;
    }

    /**
     * @param int $TypePraticien
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withTypePraticien($TypePraticien)
    {
        $new = clone $this;
        $new->TypePraticien = $TypePraticien;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentaire()
    {
        return $this->Commentaire;
    }

    /**
     * @param string $Commentaire
     * @return CPAISWSPortailVisiteMedicale
     */
    public function withCommentaire($Commentaire)
    {
        $new = clone $this;
        $new->Commentaire = $Commentaire;

        return $new;
    }
}

