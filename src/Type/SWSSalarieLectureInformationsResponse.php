<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieLectureInformationsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieLectureInformationsResult
     */
    private $SWS_SalarieLectureInformationsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieLectureInformationsResult
     */
    public function getSWS_SalarieLectureInformationsResult()
    {
        return $this->SWS_SalarieLectureInformationsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieLectureInformationsResult $SWS_SalarieLectureInformationsResult
     * @return SWSSalarieLectureInformationsResponse
     */
    public function withSWS_SalarieLectureInformationsResult($SWS_SalarieLectureInformationsResult)
    {
        $new = clone $this;
        $new->SWS_SalarieLectureInformationsResult = $SWS_SalarieLectureInformationsResult;

        return $new;
    }
}

