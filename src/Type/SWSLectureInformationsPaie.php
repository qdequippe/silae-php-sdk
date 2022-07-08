<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSLectureInformationsPaie implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteLectureInfos
     */
    private $RequeteLectureInfos;

    /**
     * Constructor
     *
     * @var string $Token
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteLectureInfos $RequeteLectureInfos
     */
    public function __construct($Token, $RequeteLectureInfos)
    {
        $this->Token = $Token;
        $this->RequeteLectureInfos = $RequeteLectureInfos;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return SWSLectureInformationsPaie
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteLectureInfos
     */
    public function getRequeteLectureInfos()
    {
        return $this->RequeteLectureInfos;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteLectureInfos $RequeteLectureInfos
     * @return SWSLectureInformationsPaie
     */
    public function withRequeteLectureInfos($RequeteLectureInfos)
    {
        $new = clone $this;
        $new->RequeteLectureInfos = $RequeteLectureInfos;

        return $new;
    }
}

