<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSClassificationMetierCompleteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSClassificationMetierCompleteResult
     */
    private $SWS_ClassificationMetierCompleteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSClassificationMetierCompleteResult
     */
    public function getSWS_ClassificationMetierCompleteResult()
    {
        return $this->SWS_ClassificationMetierCompleteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSClassificationMetierCompleteResult $SWS_ClassificationMetierCompleteResult
     * @return SWSClassificationMetierCompleteResponse
     */
    public function withSWS_ClassificationMetierCompleteResult($SWS_ClassificationMetierCompleteResult)
    {
        $new = clone $this;
        $new->SWS_ClassificationMetierCompleteResult = $SWS_ClassificationMetierCompleteResult;

        return $new;
    }
}

