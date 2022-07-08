<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSGererCycleDePaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSGererCycleDePaieResult
     */
    private $SWS_GererCycleDePaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSGererCycleDePaieResult
     */
    public function getSWS_GererCycleDePaieResult()
    {
        return $this->SWS_GererCycleDePaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSGererCycleDePaieResult $SWS_GererCycleDePaieResult
     * @return SWSGererCycleDePaieResponse
     */
    public function withSWS_GererCycleDePaieResult($SWS_GererCycleDePaieResult)
    {
        $new = clone $this;
        $new->SWS_GererCycleDePaieResult = $SWS_GererCycleDePaieResult;

        return $new;
    }
}

