<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureInformationBancaireSocieteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationBancaireSocieteResult
     */
    private $SWS_LectureInformationBancaireSocieteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationBancaireSocieteResult
     */
    public function getSWS_LectureInformationBancaireSocieteResult()
    {
        return $this->SWS_LectureInformationBancaireSocieteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationBancaireSocieteResult $SWS_LectureInformationBancaireSocieteResult
     * @return SWSLectureInformationBancaireSocieteResponse
     */
    public function withSWS_LectureInformationBancaireSocieteResult($SWS_LectureInformationBancaireSocieteResult)
    {
        $new = clone $this;
        $new->SWS_LectureInformationBancaireSocieteResult = $SWS_LectureInformationBancaireSocieteResult;

        return $new;
    }
}

