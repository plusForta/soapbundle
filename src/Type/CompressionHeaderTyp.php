<?php

namespace PlusForta\RuVSoapBundle\Type;

class CompressionHeaderTyp
{
    private string $contentCoding;

    public function getContentCoding(): string
    {
        return $this->contentCoding;
    }

    public function withContentCoding(string $contentCoding): self
    {
        $new = clone $this;
        $new->contentCoding = $contentCoding;

        return $new;
    }
}
