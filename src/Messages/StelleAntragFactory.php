<?php


namespace PlusForta\RuVSoapBundle\Messages;


use PlusForta\RuVSoapBundle\Messages\Dtos\StelleAntragDto;
use PlusForta\RuVSoapBundle\Messages\Factories\AntragMietkautionFactory;
use PlusForta\RuVSoapBundle\Messages\Factories\KennungFactory;
use PlusForta\RuVSoapBundle\Type\AntragMietkautionTyp;
use PlusForta\RuVSoapBundle\Type\BasisAnfrageTyp;
use PlusForta\RuVSoapBundle\Type\StelleAntragAnfrageTyp;

class StelleAntragFactory
{

    /** @var StelleAntragDto */
    private $dto;

    /**
     * @var KennungFactory
     */
    private $kennungFactory;
    /**
     * @var AntragMietkautionFactory
     */
    private $antragMietkautionFactory;

    public function __construct(KennungFactory $kennungFactory, AntragMietkautionFactory $antragMietkautionFactory)
    {
        $this->kennungFactory = $kennungFactory;
        $this->antragMietkautionFactory = $antragMietkautionFactory;
    }

    public function create(StelleAntragDto $dto): StelleAntragAnfrageTyp
    {
        $this->dto = $dto;
        return $this->getStelleAntragAnfrage();
    }

    private function getStelleAntragAnfrage(): StelleAntragAnfrageTyp
    {
        $stelleAntrag = new StelleAntragAnfrageTyp();
        return $stelleAntrag
            ->withKennung($this->getKennung())
            ->withBonitaetspruefungDurchfuehren($this->getBonitaetspruefungDurhchfuehren())
            ->withAntragMietkaution($this->getAntragMietkaution())
            ;
    }

    /**
     * @return BasisAnfrageTyp
     */
    private function getKennung(): BasisAnfrageTyp
    {

        return $this->kennungFactory->create($this->dto->kennung);
    }

    /**
     * @return bool
     */
    private function getBonitaetspruefungDurhchfuehren(): bool
    {
        return $this->dto->bonitaetspruefungDurhchfuehren;
    }

    private function getAntragMietkaution(): AntragMietkautionTyp
    {
        return $this->antragMietkautionFactory->create($this->dto->antragMietkaution);
    }

}