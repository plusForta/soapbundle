<?php

namespace PlusForta\RuVSoapBundle\Type;

use DateTimeImmutable;

class MietvertragTyp
{
    private string $MietvertragVom;
    private string $Einzugsdatum;

    public function getMietvertragVom(): string
    {
        return $this->MietvertragVom;
    }

    public function withMietvertragVom(DateTimeImmutable $MietvertragVom): self
    {
        $new = clone $this;
        $new->MietvertragVom = $MietvertragVom->format('d.m.Y');

        return $new;
    }

    public function withEinzugsdatum(?DateTimeImmutable $Einzugsdatum): self
    {
        $new = clone $this;
        if ($Einzugsdatum !== null) {
            $new->Einzugsdatum = $Einzugsdatum->format('d.m.Y');
        }

        return $new;
    }
}
