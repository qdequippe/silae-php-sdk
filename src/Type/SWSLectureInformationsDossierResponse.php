<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureInformationsDossierResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationsClientResult
     */
    private $SWS_LectureInformationsDossierResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationsClientResult
     */
    public function getSWS_LectureInformationsDossierResult()
    {
        return $this->SWS_LectureInformationsDossierResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationsClientResult $SWS_LectureInformationsDossierResult
     * @return SWSLectureInformationsDossierResponse
     */
    public function withSWS_LectureInformationsDossierResult($SWS_LectureInformationsDossierResult)
    {
        $new = clone $this;
        $new->SWS_LectureInformationsDossierResult = $SWS_LectureInformationsDossierResult;

        return $new;
    }
}

