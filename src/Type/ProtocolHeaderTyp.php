<?php

namespace PlusForta\RuVSoapBundle\Type;

class ProtocolHeaderTyp
{
    private string $version;

    public function getVersion(): string
    {
        return $this->version;
    }

    public function withVersion(string $version): self
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }
}

