<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExistenceMatriculeResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSExistenceMatriculeResult
     */
    private $SWS_ExistenceMatriculeResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSExistenceMatriculeResult
     */
    public function getSWS_ExistenceMatriculeResult()
    {
        return $this->SWS_ExistenceMatriculeResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSExistenceMatriculeResult $SWS_ExistenceMatriculeResult
     * @return SWSExistenceMatriculeResponse
     */
    public function withSWS_ExistenceMatriculeResult($SWS_ExistenceMatriculeResult)
    {
        $new = clone $this;
        $new->SWS_ExistenceMatriculeResult = $SWS_ExistenceMatriculeResult;

        return $new;
    }
}

