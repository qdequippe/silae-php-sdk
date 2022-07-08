<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseLectureInfos>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseLectureInfos>
 */
class ArrayOfCPAISWSReponseLectureInfos implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseLectureInfos
     */
    private $CPAISWSReponseLectureInfos;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSReponseLectureInfos[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseLectureInfos>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseLectureInfos>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSReponseLectureInfos) ? $this->CPAISWSReponseLectureInfos : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseLectureInfos $CPAISWSReponseLectureInfos
     * @return ArrayOfCPAISWSReponseLectureInfos
     */
    public function withCPAISWSReponseLectureInfos($CPAISWSReponseLectureInfos)
    {
        $new = clone $this;
        $new->CPAISWSReponseLectureInfos = $CPAISWSReponseLectureInfos;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseLectureInfos
     */
    public function getCPAISWSReponseLectureInfos()
    {
        return $this->CPAISWSReponseLectureInfos;
    }
}

