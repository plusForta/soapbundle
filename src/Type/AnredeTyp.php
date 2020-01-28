<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class AnredeTyp
{
    const HERR = 'Herr';
    const FRAU = 'Frau';
    const OHNE_ANREDE = 'ohne Anrede';
    /**
     * @var string
     */
    private $Anrede;

    public function withAnrede(string $andrede): AnredeTyp
    {
        Assert::oneOf($andrede, [
            self::HERR,
            self::FRAU,
            self::OHNE_ANREDE,
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