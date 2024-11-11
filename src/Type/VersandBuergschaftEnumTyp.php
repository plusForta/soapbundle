<?php


namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class VersandBuergschaftEnumTyp
{
    public const VERSICHERUNGSNEHMER = 'Versicherungsnehmer';
    public const VERMIETER = 'Vermieter';
    public const HAUSVERWALTER = 'Hausverwalter';
    public const VERSAND_AN_DRITTEN = 'Versand an Dritten';

    /**
     * @var string
     */
    private $VersandBuergschaft;

    public function withVersandBuergschaft(string $bedingung): VersandBuergschaftEnumTyp
    {
        Assert::oneOf($bedingung, [
            self::VERSICHERUNGSNEHMER,
            self::VERMIETER,
            self::HAUSVERWALTER,
            self::VERSAND_AN_DRITTEN,
        ]);
        $new = clone $this;
        $new->VersandBuergschaft = $bedingung;

        return $new;
    }

    public function toString(): string
    {
        return $this->VersandBuergschaft;
    }
}
