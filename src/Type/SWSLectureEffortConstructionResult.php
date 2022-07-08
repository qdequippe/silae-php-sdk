<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureEffortConstructionResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEffortConstruction
     */
    private $EffortConstruction;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEffortConstruction
     */
    public function getEffortConstruction()
    {
        return $this->EffortConstruction;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEffortConstruction $EffortConstruction
     * @return SWSLectureEffortConstructionResult
     */
    public function withEffortConstruction($EffortConstruction)
    {
        $new = clone $this;
        $new->EffortConstruction = $EffortConstruction;

        return $new;
    }
}

