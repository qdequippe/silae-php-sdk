<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLecturePersonnesLieesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLecturePersonnesLieesResult
     */
    private $SWS_LecturePersonnesLieesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLecturePersonnesLieesResult
     */
    public function getSWS_LecturePersonnesLieesResult()
    {
        return $this->SWS_LecturePersonnesLieesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLecturePersonnesLieesResult $SWS_LecturePersonnesLieesResult
     * @return SWSLecturePersonnesLieesResponse
     */
    public function withSWS_LecturePersonnesLieesResult($SWS_LecturePersonnesLieesResult)
    {
        $new = clone $this;
        $new->SWS_LecturePersonnesLieesResult = $SWS_LecturePersonnesLieesResult;

        return $new;
    }
}

