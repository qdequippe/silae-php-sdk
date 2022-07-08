<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSContenuEA
{
    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var int
     */
    private $TypeContenu;

    /**
     * @var int
     */
    private $ID_IMAGE;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSContenuEA
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeContenu()
    {
        return $this->TypeContenu;
    }

    /**
     * @param int $TypeContenu
     * @return CPAISWSContenuEA
     */
    public function withTypeContenu($TypeContenu)
    {
        $new = clone $this;
        $new->TypeContenu = $TypeContenu;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_IMAGE()
    {
        return $this->ID_IMAGE;
    }

    /**
     * @param int $ID_IMAGE
     * @return CPAISWSContenuEA
     */
    public function withID_IMAGE($ID_IMAGE)
    {
        $new = clone $this;
        $new->ID_IMAGE = $ID_IMAGE;

        return $new;
    }
}

