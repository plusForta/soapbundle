<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class AnredeGemeinschaftTyp
{
    const EHEPAAR = 'Ehepaar';
    const OHNE_ANREDE = 'ohne Anrede';

    /**
     * @var string
     */
    private $AnredeGemeinschaft;

    public function withAnrede(string $anrede): AnredeGemeinschaftTyp
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