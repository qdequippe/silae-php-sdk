<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureInformationsPaieResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseLectureInfos
     */
    private $ReponsesInfosPaie;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseLectureInfos
     */
    public function getReponsesInfosPaie()
    {
        return $this->ReponsesInfosPaie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseLectureInfos $ReponsesInfosPaie
     * @return SWSLectureInformationsPaieResult
     */
    public function withReponsesInfosPaie($ReponsesInfosPaie)
    {
        $new = clone $this;
        $new->ReponsesInfosPaie = $ReponsesInfosPaie;

        return $new;
    }
}

