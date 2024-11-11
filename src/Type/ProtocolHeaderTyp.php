<?php

namespace PlusForta\RuVSoapBundle\Type;

class ProtocolHeaderTyp
{
    /**
     * @var string
     */
    private $version;

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return ProtocolHeaderTyp
     */
    public function withVersion($version)
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }
}
