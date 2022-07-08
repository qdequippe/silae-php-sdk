<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureHandicapResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureHandicapResult
     */
    private $SWS_LectureHandicapResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureHandicapResult
     */
    public function getSWS_LectureHandicapResult()
    {
        return $this->SWS_LectureHandicapResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureHandicapResult $SWS_LectureHandicapResult
     * @return SWSLectureHandicapResponse
     */
    public function withSWS_LectureHandicapResult($SWS_LectureHandicapResult)
    {
        $new = clone $this;
        $new->SWS_LectureHandicapResult = $SWS_LectureHandicapResult;

        return $new;
    }
}

