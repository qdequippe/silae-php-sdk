<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureAxesAnalytiquesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureAxesAnalytiquesResult
     */
    private $SWS_LectureAxesAnalytiquesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureAxesAnalytiquesResult
     */
    public function getSWS_LectureAxesAnalytiquesResult()
    {
        return $this->SWS_LectureAxesAnalytiquesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureAxesAnalytiquesResult $SWS_LectureAxesAnalytiquesResult
     * @return SWSLectureAxesAnalytiquesResponse
     */
    public function withSWS_LectureAxesAnalytiquesResult($SWS_LectureAxesAnalytiquesResult)
    {
        $new = clone $this;
        $new->SWS_LectureAxesAnalytiquesResult = $SWS_LectureAxesAnalytiquesResult;

        return $new;
    }
}

