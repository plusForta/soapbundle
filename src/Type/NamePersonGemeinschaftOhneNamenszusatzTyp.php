<?php

namespace PlusForta\RuVSoapBundle\Type;

class NamePersonGemeinschaftOhneNamenszusatzTyp
{
    private string $Anrede;
    private string $Titel;
    private string $Vorname;
    private string $Nachname;

    public function getAnrede(): string
    {
        return $this->Anrede;
    }

    public function withAnrede(string $Anrede): self
    {
        $new = clone $this;
        $new->Anrede = $Anrede;

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
}
