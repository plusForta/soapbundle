<?php


namespace PlusForta\RuVSoapBundle\Messages;

use PlusForta\RuVSoapBundle\Messages\Dtos\GibAntragsstatusDto;
use PlusForta\RuVSoapBundle\Messages\Factories\KennungFactory;
use PlusForta\RuVSoapBundle\Type\BasisAnfrageTyp;
use PlusForta\RuVSoapBundle\Type\GibAntragsstatusAnfrageTyp;
use PlusForta\RuVSoapBundle\Type\VorgangsnummerTyp;

class GibAntragsstatusFactory
{
    private GibAntragsstatusDto $dto;

    public function __construct(private readonly KennungFactory $kennungFactory)
    {
    }

    public function create(GibAntragsstatusDto $dto): GibAntragsstatusAnfrageTyp
    {
        $this->dto = $dto;
        $antrag = new GibAntragsstatusAnfrageTyp();

        return $antrag
            ->withKennung($this->getKennung())
            ->withVorgangsnummern($this->getVorgangsnummer())
        ;
    }

    private function getKennung(): BasisAnfrageTyp
    {
        return $this->kennungFactory->create($this->dto->kennungDto);
    }

    private function getVorgangsnummer(): VorgangsnummerTyp
    {
        $vorgangsnummer = new VorgangsnummerTyp();
        return $vorgangsnummer->withVorgangsnummer($this->dto->vorgangsnummer);
    }
}
