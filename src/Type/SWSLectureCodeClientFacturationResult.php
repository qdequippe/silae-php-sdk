<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureCodeClientFacturationResult
{
    /**
     * @var string
     */
    private $CodeClientFacturation;

    /**
     * @return string
     */
    public function getCodeClientFacturation()
    {
        return $this->CodeClientFacturation;
    }

    /**
     * @param string $CodeClientFacturation
     * @return SWSLectureCodeClientFacturationResult
     */
    public function withCodeClientFacturation($CodeClientFacturation)
    {
        $new = clone $this;
        $new->CodeClientFacturation = $CodeClientFacturation;

        return $new;
    }
}

