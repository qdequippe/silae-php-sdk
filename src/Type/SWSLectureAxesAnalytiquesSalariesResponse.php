<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureAxesAnalytiquesSalariesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureAxesAnalytiquesSalariesResult
     */
    private $SWS_LectureAxesAnalytiquesSalariesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureAxesAnalytiquesSalariesResult
     */
    public function getSWS_LectureAxesAnalytiquesSalariesResult()
    {
        return $this->SWS_LectureAxesAnalytiquesSalariesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureAxesAnalytiquesSalariesResult $SWS_LectureAxesAnalytiquesSalariesResult
     * @return SWSLectureAxesAnalytiquesSalariesResponse
     */
    public function withSWS_LectureAxesAnalytiquesSalariesResult($SWS_LectureAxesAnalytiquesSalariesResult)
    {
        $new = clone $this;
        $new->SWS_LectureAxesAnalytiquesSalariesResult = $SWS_LectureAxesAnalytiquesSalariesResult;

        return $new;
    }
}

