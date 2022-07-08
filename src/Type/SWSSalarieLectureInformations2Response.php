<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieLectureInformations2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieLectureInformations2Result
     */
    private $SWS_SalarieLectureInformations2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieLectureInformations2Result
     */
    public function getSWS_SalarieLectureInformations2Result()
    {
        return $this->SWS_SalarieLectureInformations2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieLectureInformations2Result $SWS_SalarieLectureInformations2Result
     * @return SWSSalarieLectureInformations2Response
     */
    public function withSWS_SalarieLectureInformations2Result($SWS_SalarieLectureInformations2Result)
    {
        $new = clone $this;
        $new->SWS_SalarieLectureInformations2Result = $SWS_SalarieLectureInformations2Result;

        return $new;
    }
}

