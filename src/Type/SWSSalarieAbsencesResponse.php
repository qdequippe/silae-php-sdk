<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAbsencesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAbsencesResult
     */
    private $SWS_SalarieAbsencesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAbsencesResult
     */
    public function getSWS_SalarieAbsencesResult()
    {
        return $this->SWS_SalarieAbsencesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAbsencesResult $SWS_SalarieAbsencesResult
     * @return SWSSalarieAbsencesResponse
     */
    public function withSWS_SalarieAbsencesResult($SWS_SalarieAbsencesResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAbsencesResult = $SWS_SalarieAbsencesResult;

        return $new;
    }
}

