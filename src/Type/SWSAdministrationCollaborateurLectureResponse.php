<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAdministrationCollaborateurLectureResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAdministrationCollaborateurLectureResult
     */
    private $SWS_AdministrationCollaborateurLectureResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAdministrationCollaborateurLectureResult
     */
    public function getSWS_AdministrationCollaborateurLectureResult()
    {
        return $this->SWS_AdministrationCollaborateurLectureResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAdministrationCollaborateurLectureResult $SWS_AdministrationCollaborateurLectureResult
     * @return SWSAdministrationCollaborateurLectureResponse
     */
    public function withSWS_AdministrationCollaborateurLectureResult($SWS_AdministrationCollaborateurLectureResult)
    {
        $new = clone $this;
        $new->SWS_AdministrationCollaborateurLectureResult = $SWS_AdministrationCollaborateurLectureResult;

        return $new;
    }
}

