<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class AnredeGemeinschaftTyp
{
    const EHEPAAR = 'Ehepaar';
    const OHNE_ANREDE = 'ohne Anrede';

    private ?string $AnredeGemeinschaft;

    public function withAnrede(string $anrede): self
    {
        Assert::oneOf($anrede, [
            self::EHEPAAR,
            self::OHNE_ANREDE,
        ]);
        $new = clone $this;
        $new->AnredeGemeinschaft = $anrede;

        return $new;
    }

    public function toString(): string
    {
        return $this->AnredeGemeinschaft;
    }
}