<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureEffectifEtablissementResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureEffectifEtablissementResult
     */
    private $SWS_LectureEffectifEtablissementResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureEffectifEtablissementResult
     */
    public function getSWS_LectureEffectifEtablissementResult()
    {
        return $this->SWS_LectureEffectifEtablissementResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureEffectifEtablissementResult $SWS_LectureEffectifEtablissementResult
     * @return SWSLectureEffectifEtablissementResponse
     */
    public function withSWS_LectureEffectifEtablissementResult($SWS_LectureEffectifEtablissementResult)
    {
        $new = clone $this;
        $new->SWS_LectureEffectifEtablissementResult = $SWS_LectureEffectifEtablissementResult;

        return $new;
    }
}

