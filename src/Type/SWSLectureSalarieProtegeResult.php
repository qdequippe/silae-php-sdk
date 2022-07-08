<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureSalarieProtegeResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieProtege
     */
    private $SalarieProtege;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieProtege
     */
    public function getSalarieProtege()
    {
        return $this->SalarieProtege;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieProtege $SalarieProtege
     * @return SWSLectureSalarieProtegeResult
     */
    public function withSalarieProtege($SalarieProtege)
    {
        $new = clone $this;
        $new->SalarieProtege = $SalarieProtege;

        return $new;
    }
}

