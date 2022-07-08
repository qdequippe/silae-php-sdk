<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalarieAbsencesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieAbsence
     */
    private $SalarieAbsences;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieAbsence
     */
    public function getSalarieAbsences()
    {
        return $this->SalarieAbsences;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieAbsence $SalarieAbsences
     * @return SWSSalarieAbsencesResult
     */
    public function withSalarieAbsences($SalarieAbsences)
    {
        $new = clone $this;
        $new->SalarieAbsences = $SalarieAbsences;

        return $new;
    }
}

