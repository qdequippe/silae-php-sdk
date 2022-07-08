<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureHandicapResult
{
    /**
     * @var bool
     */
    private $SalarieHandicape;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSHandicap
     */
    private $Handicap;

    /**
     * @return bool
     */
    public function getSalarieHandicape()
    {
        return $this->SalarieHandicape;
    }

    /**
     * @param bool $SalarieHandicape
     * @return SWSLectureHandicapResult
     */
    public function withSalarieHandicape($SalarieHandicape)
    {
        $new = clone $this;
        $new->SalarieHandicape = $SalarieHandicape;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSHandicap
     */
    public function getHandicap()
    {
        return $this->Handicap;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSHandicap $Handicap
     * @return SWSLectureHandicapResult
     */
    public function withHandicap($Handicap)
    {
        $new = clone $this;
        $new->Handicap = $Handicap;

        return $new;
    }
}

