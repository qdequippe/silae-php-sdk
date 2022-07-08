<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieEmploiClassificationMetierResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieEmploiClassificationMetierResult
     */
    private $SWS_SalarieEmploiClassificationMetierResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieEmploiClassificationMetierResult
     */
    public function getSWS_SalarieEmploiClassificationMetierResult()
    {
        return $this->SWS_SalarieEmploiClassificationMetierResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieEmploiClassificationMetierResult $SWS_SalarieEmploiClassificationMetierResult
     * @return SWSSalarieEmploiClassificationMetierResponse
     */
    public function withSWS_SalarieEmploiClassificationMetierResult($SWS_SalarieEmploiClassificationMetierResult)
    {
        $new = clone $this;
        $new->SWS_SalarieEmploiClassificationMetierResult = $SWS_SalarieEmploiClassificationMetierResult;

        return $new;
    }
}

