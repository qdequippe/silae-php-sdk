<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEditionControleCICEResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    private $SWS_EditionControleCICEResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    public function getSWS_EditionControleCICEResult()
    {
        return $this->SWS_EditionControleCICEResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult $SWS_EditionControleCICEResult
     * @return SWSEditionControleCICEResponse
     */
    public function withSWS_EditionControleCICEResult($SWS_EditionControleCICEResult)
    {
        $new = clone $this;
        $new->SWS_EditionControleCICEResult = $SWS_EditionControleCICEResult;

        return $new;
    }
}

