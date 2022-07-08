<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEditionCoutsSalariauxResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    private $SWS_EditionCoutsSalariauxResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    public function getSWS_EditionCoutsSalariauxResult()
    {
        return $this->SWS_EditionCoutsSalariauxResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult $SWS_EditionCoutsSalariauxResult
     * @return SWSEditionCoutsSalariauxResponse
     */
    public function withSWS_EditionCoutsSalariauxResult($SWS_EditionCoutsSalariauxResult)
    {
        $new = clone $this;
        $new->SWS_EditionCoutsSalariauxResult = $SWS_EditionCoutsSalariauxResult;

        return $new;
    }
}

