<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureInformationsPaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationsPaieResult
     */
    private $SWS_LectureInformationsPaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationsPaieResult
     */
    public function getSWS_LectureInformationsPaieResult()
    {
        return $this->SWS_LectureInformationsPaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationsPaieResult $SWS_LectureInformationsPaieResult
     * @return SWSLectureInformationsPaieResponse
     */
    public function withSWS_LectureInformationsPaieResult($SWS_LectureInformationsPaieResult)
    {
        $new = clone $this;
        $new->SWS_LectureInformationsPaieResult = $SWS_LectureInformationsPaieResult;

        return $new;
    }
}

