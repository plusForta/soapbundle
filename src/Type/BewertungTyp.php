<?php

namespace PlusForta\RuVSoapBundle\Type;

class BewertungTyp
{
    /**
     * @var string
     */
    private $Bewertungsergbnis;

    /**
     * @var string
     */
    private $Kommentar;

    /**
     * @return string
     */
    public function getBewertungsergbnis(): string
    {
        return $this->Bewertungsergbnis;
    }

    /**
     * @param BewertungsergebnisEnumTyp $Bewertungsergbnis
     * @return BewertungTyp
     */
    public function withBewertungsergbnis(BewertungsergebnisEnumTyp $Bewertungsergbnis): BewertungTyp
    {
        $new = clone $this;
        $new->Bewertungsergbnis = $Bewertungsergbnis->toString();

        return $new;
    }

    /**
     * @return string
     */
    public function getKommentar(): string
    {
        return $this->Kommentar;
    }

    /**
     * @param string $Kommentar
     * @return BewertungTyp
     */
    public function withKommentar(string $Kommentar): BewertungTyp
    {
        $new = clone $this;
        $new->Kommentar = $Kommentar;

        return $new;
    }
}
