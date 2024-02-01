<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class AnredeTyp
{
    const HERR = 'Herr';
    const FRAU = 'Frau';
    const OHNE_ANREDE = 'ohne Anrede';

    const DIVERS = 'Divers'; // need to switch to WSDL 2023 for this or for '' (empty string)

    private ?string $Anrede;

    public function withAnrede(string $andrede): self
    {
        Assert::oneOf($andrede, [
            self::HERR,
            self::FRAU,
            self::OHNE_ANREDE,
            '',
        ]);
        $new = clone $this;
        $new->Anrede = $andrede;

        return $new;
    }

    public function toString(): string
    {
        return $this->Anrede;
    }
}