<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class VersandBuergschaftEnumTyp
{
    final public const VERSICHERUNGSNEHMER = 'Versicherungsnehmer';
    final public const VERMIETER = 'Vermieter';
    final public const HAUSVERWALTER = 'Hausverwalter';
    final public const VERSAND_AN_DRITTEN = 'Versand an Dritten';

    private string $VersandBuergschaft;

    public function withVersandBuergschaft(string $bedingung): self
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