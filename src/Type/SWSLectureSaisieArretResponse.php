<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureSaisieArretResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureSaisieArretResult
     */
    private $SWS_LectureSaisieArretResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureSaisieArretResult
     */
    public function getSWS_LectureSaisieArretResult()
    {
        return $this->SWS_LectureSaisieArretResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureSaisieArretResult $SWS_LectureSaisieArretResult
     * @return SWSLectureSaisieArretResponse
     */
    public function withSWS_LectureSaisieArretResult($SWS_LectureSaisieArretResult)
    {
        $new = clone $this;
        $new->SWS_LectureSaisieArretResult = $SWS_LectureSaisieArretResult;

        return $new;
    }
}

