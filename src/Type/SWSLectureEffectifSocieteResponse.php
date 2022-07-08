<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureEffectifSocieteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureEffectifSocieteResult
     */
    private $SWS_LectureEffectifSocieteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureEffectifSocieteResult
     */
    public function getSWS_LectureEffectifSocieteResult()
    {
        return $this->SWS_LectureEffectifSocieteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureEffectifSocieteResult $SWS_LectureEffectifSocieteResult
     * @return SWSLectureEffectifSocieteResponse
     */
    public function withSWS_LectureEffectifSocieteResult($SWS_LectureEffectifSocieteResult)
    {
        $new = clone $this;
        $new->SWS_LectureEffectifSocieteResult = $SWS_LectureEffectifSocieteResult;

        return $new;
    }
}

