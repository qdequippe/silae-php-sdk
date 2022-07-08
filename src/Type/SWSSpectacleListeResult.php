<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSpectacleListeResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSpectacle
     */
    private $Spectacles;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSpectacle
     */
    public function getSpectacles()
    {
        return $this->Spectacles;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSpectacle $Spectacles
     * @return SWSSpectacleListeResult
     */
    public function withSpectacles($Spectacles)
    {
        $new = clone $this;
        $new->Spectacles = $Spectacles;

        return $new;
    }
}

