<?php

namespace PlusForta\RuVSoapBundle\Messages;

use PlusForta\RuVSoapBundle\Messages\Dtos\GibVertragsdatenDto;
use PlusForta\RuVSoapBundle\Messages\Factories\KennungFactory;
use PlusForta\RuVSoapBundle\Type\BasisAnfrageTyp;
use PlusForta\RuVSoapBundle\Type\GibVertragsdatenAnfrageTyp;
use PlusForta\RuVSoapBundle\Type\RechtsgeschaeftTyp;
use PlusForta\RuVSoapBundle\Type\ZugriffsschluesselTyp;

class GibVertragsdatenFactory
{
    private GibVertragsdatenDto $dto;

    public function __construct(private readonly KennungFactory $kennungFactory)
    {
    }

    public function create(GibVertragsdatenDto $dto): GibVertragsdatenAnfrageTyp
    {
        $this->dto = $dto;
        $antrag = new GibVertragsdatenAnfrageTyp();

        return $antrag
            ->withKennung($this->getKennung())
            ->withZugriffsschluessel($this->getZugriffsschluessel())
        ;
    }

    private function getKennung(): BasisAnfrageTyp
    {
        return $this->kennungFactory->create($this->dto->kennungDto);
    }

    private function getZugriffsschluessel(): ZugriffsschluesselTyp
    {
        $zugriffsschluessel = new ZugriffsschluesselTyp();

        return $zugriffsschluessel
            ->withVorgangsnummer($this->dto->vorgangsnummer)
            ->withRechtsgeschaeft($this->getReqchtsgeschaeft())
        ;
    }

    private function getReqchtsgeschaeft(): RechtsgeschaeftTyp
    {
        $rechtsgeschaeft = new RechtsgeschaeftTyp();

        return $rechtsgeschaeft
            ->withArbeitsgebiet($this->dto->arbeitesgebiet)
            ->withVersicherungsnummer($this->dto->versicherungsnummer)
        ;
    }
}
