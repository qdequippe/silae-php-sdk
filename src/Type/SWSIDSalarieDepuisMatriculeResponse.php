<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSIDSalarieDepuisMatriculeResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSIDSalarieResult
     */
    private $SWS_IDSalarieDepuisMatriculeResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSIDSalarieResult
     */
    public function getSWS_IDSalarieDepuisMatriculeResult()
    {
        return $this->SWS_IDSalarieDepuisMatriculeResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSIDSalarieResult $SWS_IDSalarieDepuisMatriculeResult
     * @return SWSIDSalarieDepuisMatriculeResponse
     */
    public function withSWS_IDSalarieDepuisMatriculeResult($SWS_IDSalarieDepuisMatriculeResult)
    {
        $new = clone $this;
        $new->SWS_IDSalarieDepuisMatriculeResult = $SWS_IDSalarieDepuisMatriculeResult;

        return $new;
    }
}

