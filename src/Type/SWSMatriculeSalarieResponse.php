<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSMatriculeSalarieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSMatriculeSalarieResult
     */
    private $SWS_MatriculeSalarieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSMatriculeSalarieResult
     */
    public function getSWS_MatriculeSalarieResult()
    {
        return $this->SWS_MatriculeSalarieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSMatriculeSalarieResult $SWS_MatriculeSalarieResult
     * @return SWSMatriculeSalarieResponse
     */
    public function withSWS_MatriculeSalarieResult($SWS_MatriculeSalarieResult)
    {
        $new = clone $this;
        $new->SWS_MatriculeSalarieResult = $SWS_MatriculeSalarieResult;

        return $new;
    }
}

