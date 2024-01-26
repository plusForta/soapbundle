<?php

namespace PlusForta\RuVSoapBundle\Type;

class ServiceHeaderTyp
{
    private string $name;
    private string $version;
    private string $method;

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): self
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

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

    public function getMethod(): string
    {
        return $this->method;
    }

    public function withMethod(string $method)
    {
        $new = clone $this;
        $new->method = $method;

        return $new;
    }
}

