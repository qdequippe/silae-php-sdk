<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureInformationsClientResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSClient
     */
    private $InformationsClient;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CSWSClient
     */
    public function getInformationsClient()
    {
        return $this->InformationsClient;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CSWSClient $InformationsClient
     * @return SWSLectureInformationsClientResult
     */
    public function withInformationsClient($InformationsClient)
    {
        $new = clone $this;
        $new->InformationsClient = $InformationsClient;

        return $new;
    }
}

