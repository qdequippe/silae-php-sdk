<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieInitialiserCumulsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieInitialiserCumulsResult
     */
    private $SWS_SalarieInitialiserCumulsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieInitialiserCumulsResult
     */
    public function getSWS_SalarieInitialiserCumulsResult()
    {
        return $this->SWS_SalarieInitialiserCumulsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieInitialiserCumulsResult $SWS_SalarieInitialiserCumulsResult
     * @return SWSSalarieInitialiserCumulsResponse
     */
    public function withSWS_SalarieInitialiserCumulsResult($SWS_SalarieInitialiserCumulsResult)
    {
        $new = clone $this;
        $new->SWS_SalarieInitialiserCumulsResult = $SWS_SalarieInitialiserCumulsResult;

        return $new;
    }
}

