<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureSalarieProtegeResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureSalarieProtegeResult
     */
    private $SWS_LectureSalarieProtegeResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureSalarieProtegeResult
     */
    public function getSWS_LectureSalarieProtegeResult()
    {
        return $this->SWS_LectureSalarieProtegeResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureSalarieProtegeResult $SWS_LectureSalarieProtegeResult
     * @return SWSLectureSalarieProtegeResponse
     */
    public function withSWS_LectureSalarieProtegeResult($SWS_LectureSalarieProtegeResult)
    {
        $new = clone $this;
        $new->SWS_LectureSalarieProtegeResult = $SWS_LectureSalarieProtegeResult;

        return $new;
    }
}

