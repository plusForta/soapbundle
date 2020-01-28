<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class CodeEnumTyp
{

    public const OK = 'OK';
    public const ANMELDEFEHLER = 'ANMELDEFEHLER';
    public const FEHLER = 'FEHLER';
    public const DATENBANKFEHLER = 'DATENBANKFEHLER';
    public const INFOSCOREFEHLER = 'INFOSCOREFEHLER';
    public const PARAMETER_NICHT_GEFUNDEN = 'PARAMETER_NICHT_GEFUNDEN';
    public const UNGUELTIGE_ANFRAGE = 'UNGUELTIGE_ANFRAGE';
    public const XPSFEHLER = 'XPSFEHLER';

    /**
     * @var string
     */
    private $Code;

    public function withCode(string $Code): CodeEnumTyp
    {
        Assert::oneOf($Code, [
            self::OK,
            self::ANMELDEFEHLER,
            self::FEHLER,
            self::DATENBANKFEHLER,
            self::INFOSCOREFEHLER,
            self::PARAMETER_NICHT_GEFUNDEN,
            self::UNGUELTIGE_ANFRAGE,
            self::XPSFEHLER,
        ]);

        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    public function toString(): string
    {
        return $this->Code;
    }
}