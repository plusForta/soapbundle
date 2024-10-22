<?php

namespace PlusForta\RuVSoapBundle\Type;

class BewertungTyp
{
    private string $Bewertungsergbnis;
    private string $Kommentar;

    public function getBewertungsergbnis(): string
    {
        return $this->Bewertungsergbnis;
    }

    public function withBewertungsergbnis(BewertungsergebnisEnumTyp $Bewertungsergbnis): self
    {
        $new = clone $this;
        $new->Bewertungsergbnis = $Bewertungsergbnis->toString();

        return $new;
    }

    public function getKommentar(): string
    {
        return $this->Kommentar;
    }

    public function withKommentar(string $Kommentar): self
    {
        $new = clone $this;
        $new->Kommentar = $Kommentar;

        return $new;
    }
}
