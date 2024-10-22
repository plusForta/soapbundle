<?php

namespace PlusForta\RuVSoapBundle\Type;

class WerbewiderspruchTyp
{
    private bool $KeineTelefonWerbung = false;
    private bool $KeineEMailWerbung = false;
    private bool $KeineDatenweitergabe = false;
    private bool $KeineSchriftlicheWerbung = false;

    public function getKeineTelefonWerbung(): bool
    {
        return $this->KeineTelefonWerbung;
    }

    public function withKeineTelefonWerbung(bool $KeineTelefonWerbung): self
    {
        $new = clone $this;
        $new->KeineTelefonWerbung = $KeineTelefonWerbung;

        return $new;
    }

    public function getKeineEMailWerbung(): bool
    {
        return $this->KeineEMailWerbung;
    }

    public function withKeineEMailWerbung(bool $KeineEMailWerbung): self
    {
        $new = clone $this;
        $new->KeineEMailWerbung = $KeineEMailWerbung;

        return $new;
    }

    public function getKeineDatenweitergabe(): bool
    {
        return $this->KeineDatenweitergabe;
    }

    public function withKeineDatenweitergabe(bool $KeineDatenweitergabe): self
    {
        $new = clone $this;
        $new->KeineDatenweitergabe = $KeineDatenweitergabe;

        return $new;
    }

    public function getKeineSchriftlicheWerbung(): bool
    {
        return $this->KeineSchriftlicheWerbung;
    }

    public function withKeineSchriftlicheWerbung(bool $KeineSchriftlicheWerbung): self
    {
        $new = clone $this;
        $new->KeineSchriftlicheWerbung = $KeineSchriftlicheWerbung;

        return $new;
    }
}
