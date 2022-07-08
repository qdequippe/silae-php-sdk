<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalarieLectureInformationsResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSInformationsSalarie
     */
    private $InformationsSalarie;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CSWSInformationsSalarie
     */
    public function getInformationsSalarie()
    {
        return $this->InformationsSalarie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CSWSInformationsSalarie $InformationsSalarie
     * @return SWSSalarieLectureInformationsResult
     */
    public function withInformationsSalarie($InformationsSalarie)
    {
        $new = clone $this;
        $new->InformationsSalarie = $InformationsSalarie;

        return $new;
    }
}

