<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\KontaktDto;
use PlusForta\RuVSoapBundle\Messages\Dtos\NumberDto;
use PlusForta\RuVSoapBundle\Type\GeschaeftlichTyp;
use PlusForta\RuVSoapBundle\Type\KontaktdatenTyp;
use PlusForta\RuVSoapBundle\Type\KontaktnummerTyp;
use PlusForta\RuVSoapBundle\Type\PrivatTyp;
use PlusForta\RuVSoapBundle\Utils\Modify;
use Webmozart\Assert\Assert;

class KontaktFactory
{
    public const PRIVAT = PrivatTyp::class;
    public const GESCHAEFTLICH = GeschaeftlichTyp::class;

    /** @var KontaktDto  */
    private $dto;

    public function __construct(KontaktDto $dto)
    {
        $this->dto = $dto;
    }

    /**
     * @param string $type
     * @return KontaktdatenTyp
     */
    public function create($type = PrivatTyp::class): KontaktdatenTyp
    {
        Assert::oneOf($type, [
            self::PRIVAT,
            self::GESCHAEFTLICH,
        ]);

        $kontaktdaten = new KontaktdatenTyp();

        if ($type === self::PRIVAT) {
            return $kontaktdaten->withPrivat($this->getPrivat());
        }

        return $kontaktdaten->withGeschaeftlich($this->getGeschaeftlich());
    }

    private function getPrivat(): PrivatTyp
    {
        $privat = new PrivatTyp();
        return $privat
            ->withTelefon($this->getContactNumber($this->dto->telefon))
            ->withMobil($this->getContactNumber($this->dto->mobile))
            ->withFax($this->getContactNumber($this->dto->fax))
            ->withEMail(Modify::trimOrNull($this->getEMail(), PrivatTyp::MAX_LENGTH_EMAIL))
            ;
    }

    private function getGeschaeftlich(): GeschaeftlichTyp
    {
        $geschaeftlich = new GeschaeftlichTyp();
        return $geschaeftlich
            ->withTelefon($this->getContactNumber($this->dto->telefon))
            ->withMobil($this->getContactNumber($this->dto->mobile))
            ->withFax($this->getContactNumber($this->dto->fax))
            ->withEMail(Modify::trimOrNull($this->getEMail(), GeschaeftlichTyp::MAX_LENGTH_EMAIL))
            ;
    }

    private function getContactNumber(?NumberDto $number): ?KontaktnummerTyp
    {
        if ($number === null) {
            return  null;
        }

        $telefon = new KontaktnummerTyp();
        if ($number->rawNumber) {
            return $telefon->fromRawNumber($number->rawNumber);
        }

        return $telefon
            ->withVorwahl($number->vorwahl)
            ->withRufnummer(Modify::trim($number->rufnummer, KontaktnummerTyp::MAX_LENGTH_VORWAHL));
    }


    private function getEMail(): ?string
    {
        return $this->dto->email;
    }




}