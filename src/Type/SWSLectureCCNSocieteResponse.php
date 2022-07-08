<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureCCNSocieteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureCCNSocieteResult
     */
    private $SWS_LectureCCNSocieteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureCCNSocieteResult
     */
    public function getSWS_LectureCCNSocieteResult()
    {
        return $this->SWS_LectureCCNSocieteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureCCNSocieteResult $SWS_LectureCCNSocieteResult
     * @return SWSLectureCCNSocieteResponse
     */
    public function withSWS_LectureCCNSocieteResult($SWS_LectureCCNSocieteResult)
    {
        $new = clone $this;
        $new->SWS_LectureCCNSocieteResult = $SWS_LectureCCNSocieteResult;

        return $new;
    }
}

