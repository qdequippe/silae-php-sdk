<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSMail
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $To;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $Cc;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $Bcc;

    /**
     * @var string
     */
    private $Subject;

    /**
     * @var bool
     */
    private $IsBodyHtml;

    /**
     * @var string
     */
    private $Body;

    /**
     * @var bool
     */
    private $AccuseReception;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSMailPieceJointe
     */
    private $PiecesJointes;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getTo()
    {
        return $this->To;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $To
     * @return CPAISWSMail
     */
    public function withTo($To)
    {
        $new = clone $this;
        $new->To = $To;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCc()
    {
        return $this->Cc;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $Cc
     * @return CPAISWSMail
     */
    public function withCc($Cc)
    {
        $new = clone $this;
        $new->Cc = $Cc;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getBcc()
    {
        return $this->Bcc;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $Bcc
     * @return CPAISWSMail
     */
    public function withBcc($Bcc)
    {
        $new = clone $this;
        $new->Bcc = $Bcc;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param string $Subject
     * @return CPAISWSMail
     */
    public function withSubject($Subject)
    {
        $new = clone $this;
        $new->Subject = $Subject;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsBodyHtml()
    {
        return $this->IsBodyHtml;
    }

    /**
     * @param bool $IsBodyHtml
     * @return CPAISWSMail
     */
    public function withIsBodyHtml($IsBodyHtml)
    {
        $new = clone $this;
        $new->IsBodyHtml = $IsBodyHtml;

        return $new;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->Body;
    }

    /**
     * @param string $Body
     * @return CPAISWSMail
     */
    public function withBody($Body)
    {
        $new = clone $this;
        $new->Body = $Body;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAccuseReception()
    {
        return $this->AccuseReception;
    }

    /**
     * @param bool $AccuseReception
     * @return CPAISWSMail
     */
    public function withAccuseReception($AccuseReception)
    {
        $new = clone $this;
        $new->AccuseReception = $AccuseReception;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSMailPieceJointe
     */
    public function getPiecesJointes()
    {
        return $this->PiecesJointes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSMailPieceJointe $PiecesJointes
     * @return CPAISWSMail
     */
    public function withPiecesJointes($PiecesJointes)
    {
        $new = clone $this;
        $new->PiecesJointes = $PiecesJointes;

        return $new;
    }
}

