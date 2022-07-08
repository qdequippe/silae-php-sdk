<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureFNALResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureFNALResult
     */
    private $SWS_LectureFNALResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureFNALResult
     */
    public function getSWS_LectureFNALResult()
    {
        return $this->SWS_LectureFNALResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureFNALResult $SWS_LectureFNALResult
     * @return SWSLectureFNALResponse
     */
    public function withSWS_LectureFNALResult($SWS_LectureFNALResult)
    {
        $new = clone $this;
        $new->SWS_LectureFNALResult = $SWS_LectureFNALResult;

        return $new;
    }
}

