<?php

namespace PlusForta\RuVSoapBundle\Type;

class NameTyp
{
    private string $Name;
    private string $Namenszusatz;

    public function getName(): string
    {
        return $this->Name;
    }

    public function withName(string $Name): self
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    public function getNamenszusatz(): string
    {
        return $this->Namenszusatz;
    }

    public function withNamenszusatz(string $Namenszusatz): self
    {
        $new = clone $this;
        $new->Namenszusatz = $Namenszusatz;

        return $new;
    }
}
