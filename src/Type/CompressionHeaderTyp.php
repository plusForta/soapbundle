<?php

namespace PlusForta\RuVSoapBundle\Type;

class CompressionHeaderTyp
{
    /**
     * @var string
     */
    private $contentCoding;

    /**
     * @return string
     */
    public function getContentCoding()
    {
        return $this->contentCoding;
    }

    /**
     * @param string $contentCoding
     * @return CompressionHeaderTyp
     */
    public function withContentCoding($contentCoding)
    {
        $new = clone $this;
        $new->contentCoding = $contentCoding;

        return $new;
    }
}
