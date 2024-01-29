<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\GemeinschaftDto;
use PlusForta\RuVSoapBundle\Messages\Dtos\LesseeDto;
use PlusForta\RuVSoapBundle\Type\AdresseNatuerlichePersonTyp;
use PlusForta\RuVSoapBundle\Type\AnredeGemeinschaftTyp;
use PlusForta\RuVSoapBundle\Type\AnredeHerrFrauTyp;
use PlusForta\RuVSoapBundle\Type\GemeinschaftTyp;
use PlusForta\RuVSoapBundle\Type\GeschaeftlichTyp;
use PlusForta\RuVSoapBundle\Type\KontaktdatenTyp;
use PlusForta\RuVSoapBundle\Type\NamePersonGemeinschaftOhneNamenszusatzTyp;
use PlusForta\RuVSoapBundle\Type\NamePersonGemeinschaftTyp;
use PlusForta\RuVSoapBundle\Type\PrivatTyp;

class GemeinschaftFactory
{

    /** @var GemeinschaftDto  */
    private $dto;

    public function __construct(GemeinschaftDto $dto)
    {
        $this->dto = $dto;
    }

    public function create(): GemeinschaftTyp
    {
        $gemeinschaft = new GemeinschaftTyp();
        return $gemeinschaft
            ->withAnredeGemeinschaft($this->getAnredeGemeinschaft()->toString())
            ->withNameErstePerson($this->getNameErstePerson())
            ->withNameZweitePerson($this->getNameZweitePerson())
            ->withAdresse($this->getAdresse())
            ->withKontaktdaten($this->getKontaktdaten())
            ;
    }

    private function getAnredeGemeinschaft(): AnredeGemeinschaftTyp
    {
        $anrede = new AnredeGemeinschaftTyp();
        return $anrede->withAnrede($this->dto->anredeGemeinschaft);
    }

    private function getNameErstePerson(): NamePersonGemeinschaftTyp
    {
        $lessee = $this->dto->lessees[0];
        $name = new NamePersonGemeinschaftTyp();
        return $name->withAnrede($this->getAnrede($lessee))
            ->withTitel($this->getTitel($lessee))
            ->withVorname($this->getVorname($lessee))
            ->withNachname($this->getNachname($lessee))
            ;
    }

    private function getNameZweitePerson(): NamePersonGemeinschaftOhneNamenszusatzTyp
    {
        $lessee = $this->dto->lessees[1];
        $name = new NamePersonGemeinschaftOhneNamenszusatzTyp();
        return $name->withAnrede($this->getAnrede($lessee)->toString())
            ->withTitel($this->getTitel($lessee))
            ->withVorname($this->getVorname($lessee))
            ->withNachname($this->getNachname($lessee))
            ;
    }

    private function getAnrede(LesseeDto $lessee): AnredeHerrFrauTyp
    {
        $anrede = new AnredeHerrFrauTyp();
        return $anrede->withAnrede($lessee->anrede);
    }

    private function getTitel(LesseeDto $lessee): string
    {
        return $lessee->titel;
    }

    private function getVorname(LesseeDto $lessee): string
    {
        return $lessee->vorname;
    }

    private function getNachname(LesseeDto $lessee): string
    {
        return $lessee->nachname;
    }

    private function getAdresse(): AdresseNatuerlichePersonTyp
    {
        $factory = new AdresseNatuerlichePersonFactory($this->dto->adresse);
        return $factory->create();
    }

    private function getKontaktdaten(): KontaktdatenTyp
    {
        $factory = new KontaktFactory($this->dto->kontaktdaten);

        if ($this->dto->kontaktdaten->isPrivate) {
            return $factory->create(KontaktFactory::PRIVAT);
        }

        return $factory->create(KontaktFactory::GESCHAEFTLICH);
    }

}