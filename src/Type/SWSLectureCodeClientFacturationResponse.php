<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureCodeClientFacturationResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureCodeClientFacturationResult
     */
    private $SWS_LectureCodeClientFacturationResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureCodeClientFacturationResult
     */
    public function getSWS_LectureCodeClientFacturationResult()
    {
        return $this->SWS_LectureCodeClientFacturationResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureCodeClientFacturationResult $SWS_LectureCodeClientFacturationResult
     * @return SWSLectureCodeClientFacturationResponse
     */
    public function withSWS_LectureCodeClientFacturationResult($SWS_LectureCodeClientFacturationResult)
    {
        $new = clone $this;
        $new->SWS_LectureCodeClientFacturationResult = $SWS_LectureCodeClientFacturationResult;

        return $new;
    }
}

