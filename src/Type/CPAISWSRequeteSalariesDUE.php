<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSRequeteSalariesDUE
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $MatriculesSalaries;

    /**
     * @var \DateTimeInterface
     */
    private $DateMinEmploi;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getMatriculesSalaries()
    {
        return $this->MatriculesSalaries;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $MatriculesSalaries
     * @return CPAISWSRequeteSalariesDUE
     */
    public function withMatriculesSalaries($MatriculesSalaries)
    {
        $new = clone $this;
        $new->MatriculesSalaries = $MatriculesSalaries;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateMinEmploi()
    {
        return $this->DateMinEmploi;
    }

    /**
     * @param \DateTimeInterface $DateMinEmploi
     * @return CPAISWSRequeteSalariesDUE
     */
    public function withDateMinEmploi($DateMinEmploi)
    {
        $new = clone $this;
        $new->DateMinEmploi = $DateMinEmploi;

        return $new;
    }
}

