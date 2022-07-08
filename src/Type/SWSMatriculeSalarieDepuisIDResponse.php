<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSMatriculeSalarieDepuisIDResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSMatriculeSalarieResult
     */
    private $SWS_MatriculeSalarieDepuisIDResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSMatriculeSalarieResult
     */
    public function getSWS_MatriculeSalarieDepuisIDResult()
    {
        return $this->SWS_MatriculeSalarieDepuisIDResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSMatriculeSalarieResult $SWS_MatriculeSalarieDepuisIDResult
     * @return SWSMatriculeSalarieDepuisIDResponse
     */
    public function withSWS_MatriculeSalarieDepuisIDResult($SWS_MatriculeSalarieDepuisIDResult)
    {
        $new = clone $this;
        $new->SWS_MatriculeSalarieDepuisIDResult = $SWS_MatriculeSalarieDepuisIDResult;

        return $new;
    }
}

