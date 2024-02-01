<?php

namespace PlusForta\RuVSoapBundle\Type;

class NamePersonGemeinschaftTyp
{
    private mixed $Anrede;
    private string $Titel;
    private string $Vorname;
    private string $Nachname;
    private string $Namenszusatz;

    public function getAnrede(): mixed
    {
        return $this->Anrede;
    }

    public function withAnrede(mixed $Anrede): self
    {
        $new = clone $this;
        $new->Anrede = $Anrede->toString();

        return $new;
    }

    public function getTitel(): string
    {
        return $this->Titel;
    }

    public function withTitel(string $Titel): self
    {
        $new = clone $this;
        $new->Titel = $Titel;

        return $new;
    }

    public function getVorname(): string
    {
        return $this->Vorname;
    }

    public function withVorname(string $Vorname): self
    {
        $new = clone $this;
        $new->Vorname = $Vorname;

        return $new;
    }

    public function getNachname(): string
    {
        return $this->Nachname;
    }

    public function withNachname(string $Nachname): self
    {
        $new = clone $this;
        $new->Nachname = $Nachname;

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

