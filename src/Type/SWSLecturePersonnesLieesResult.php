<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLecturePersonnesLieesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee
     */
    private $Conjoint;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPersonneLiee
     */
    private $PersonnesLiees;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee
     */
    public function getConjoint()
    {
        return $this->Conjoint;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee $Conjoint
     * @return SWSLecturePersonnesLieesResult
     */
    public function withConjoint($Conjoint)
    {
        $new = clone $this;
        $new->Conjoint = $Conjoint;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPersonneLiee
     */
    public function getPersonnesLiees()
    {
        return $this->PersonnesLiees;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPersonneLiee $PersonnesLiees
     * @return SWSLecturePersonnesLieesResult
     */
    public function withPersonnesLiees($PersonnesLiees)
    {
        $new = clone $this;
        $new->PersonnesLiees = $PersonnesLiees;

        return $new;
    }
}

