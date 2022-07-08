<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureEffortConstructionResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureEffortConstructionResult
     */
    private $SWS_LectureEffortConstructionResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureEffortConstructionResult
     */
    public function getSWS_LectureEffortConstructionResult()
    {
        return $this->SWS_LectureEffortConstructionResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureEffortConstructionResult $SWS_LectureEffortConstructionResult
     * @return SWSLectureEffortConstructionResponse
     */
    public function withSWS_LectureEffortConstructionResult($SWS_LectureEffortConstructionResult)
    {
        $new = clone $this;
        $new->SWS_LectureEffortConstructionResult = $SWS_LectureEffortConstructionResult;

        return $new;
    }
}

