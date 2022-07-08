<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureFNALResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSFNAL
     */
    private $FNAL;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSFNAL
     */
    public function getFNAL()
    {
        return $this->FNAL;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSFNAL $FNAL
     * @return SWSLectureFNALResult
     */
    public function withFNAL($FNAL)
    {
        $new = clone $this;
        $new->FNAL = $FNAL;

        return $new;
    }
}

