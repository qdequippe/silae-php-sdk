<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalarieLectureInformations2Result
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSInformationsSalarie2
     */
    private $InformationsSalarie2;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CSWSInformationsSalarie2
     */
    public function getInformationsSalarie2()
    {
        return $this->InformationsSalarie2;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CSWSInformationsSalarie2 $InformationsSalarie2
     * @return SWSSalarieLectureInformations2Result
     */
    public function withInformationsSalarie2($InformationsSalarie2)
    {
        $new = clone $this;
        $new->InformationsSalarie2 = $InformationsSalarie2;

        return $new;
    }
}

