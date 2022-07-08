<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSMailPieceJointe
{
    /**
     * @var string
     */
    private $Content;

    /**
     * @var string
     */
    private $Name;

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param string $Content
     * @return CPAISWSMailPieceJointe
     */
    public function withContent($Content)
    {
        $new = clone $this;
        $new->Content = $Content;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return CPAISWSMailPieceJointe
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }
}

