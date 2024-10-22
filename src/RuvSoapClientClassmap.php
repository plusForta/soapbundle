<?php

namespace PlusForta\RuVSoapBundle;

use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;

class RuvSoapClientClassmap
{
    public $number;
    public static function getCollection(): ClassMapCollection
    {
        return new ClassMapCollection(...[
            new ClassMap('protocolHeaderTyp', Type\ProtocolHeaderTyp::class),
            new ClassMap('identityHeaderTyp', Type\IdentityHeaderTyp::class),
            new ClassMap('identityCompanyTyp', Type\IdentityCompanyTyp::class),
            new ClassMap('serviceHeaderTyp', Type\ServiceHeaderTyp::class),
            new ClassMap('statisticHeaderTyp', Type\StatisticHeaderTyp::class),
            new ClassMap('compressionHeaderTyp', Type\CompressionHeaderTyp::class),
            new ClassMap('accountingHeaderTyp', Type\AccountingHeaderTyp::class),
//            new ClassMap('basisAnfrageTyp', Type\BasisAnfrageTyp::class),
//            new ClassMap('basisAntwortTyp', Type\BasisAntwortTyp::class),
//            new ClassMap('statusTyp', Type\StatusTyp::class),
//            new ClassMap('bewertungTyp', Type\BewertungTyp::class),
//            new ClassMap('stelleAntragAnfrageTyp', Type\StelleAntragAnfrageTyp::class),
//            new ClassMap('antragMietkautionTyp', Type\AntragMietkautionTyp::class),
//            new ClassMap('allgemeineAngabenTyp', Type\AllgemeineAngabenTyp::class),
//            new ClassMap('agenturdatenTyp', Type\AgenturdatenTyp::class),
//            new ClassMap('agenturTyp', Type\AgenturTyp::class),
//            new ClassMap('mitarbeiterdatenTyp', Type\MitarbeiterdatenTyp::class),
//            new ClassMap('inkassodatenTyp', Type\InkassodatenTyp::class),
//            new ClassMap('bankverbindungTyp', Type\BankverbindungTyp::class),
//            new ClassMap('lastschriftverfahrenTyp', Type\LastschriftverfahrenTyp::class),
//            new ClassMap('sepaMandatTyp', Type\SepaMandatTyp::class),
//            new ClassMap('werbewiderspruchTyp', Type\WerbewiderspruchTyp::class),
//            new ClassMap('antragsdatenTyp', Type\AntragsdatenTyp::class),
//            new ClassMap('adressdatenTyp', Type\AdressdatenTyp::class),
//            new ClassMap('versicherungsnehmerTyp', Type\VersicherungsnehmerTyp::class),
//            new ClassMap('natuerlichePersonErweitertTyp', Type\NatuerlichePersonErweitertTyp::class),
//            new ClassMap('nameNatuerlichePersonHerrFrauTyp', Type\NameNatuerlichePersonHerrFrauTyp::class),
//            new ClassMap('natuerlichePersonTyp', Type\NatuerlichePersonTyp::class),
//            new ClassMap('nameNatuerlichePersonTyp', Type\NameNatuerlichePersonTyp::class),
//            new ClassMap('adresseNatuerlichePersonTyp', Type\AdresseNatuerlichePersonTyp::class),
//            new ClassMap('kontaktdatenTyp', Type\KontaktdatenTyp::class),
//            new ClassMap('privatTyp', Type\PrivatTyp::class),
//            new ClassMap('kontaktnummerTyp', Type\KontaktnummerTyp::class),
//            new ClassMap('geschaeftlichTyp', Type\GeschaeftlichTyp::class),
//            new ClassMap('gemeinschaftTyp', Type\GemeinschaftTyp::class),
//            new ClassMap('namePersonGemeinschaftTyp', Type\NamePersonGemeinschaftTyp::class),
//            new ClassMap('vermieterTyp', Type\VermieterTyp::class),
//            new ClassMap('juristischePersonTyp', Type\JuristischePersonTyp::class),
//            new ClassMap('nameJuristischePersonTyp', Type\NameJuristischePersonTyp::class),
//            new ClassMap('adresseJuristischePersonTyp', Type\AdresseJuristischePersonTyp::class),
//            new ClassMap('mietobjektTyp', Type\MietobjektTyp::class),
//            new ClassMap('abweichBuergEmpfaengerTyp', Type\AbweichBuergEmpfaengerTyp::class),
//            new ClassMap('vertragsdatenTyp', Type\VertragsdatenTyp::class),
//            new ClassMap('tarifdatenTyp', Type\TarifdatenTyp::class),
//            new ClassMap('mietvertragTyp', Type\MietvertragTyp::class),
//            new ClassMap('dokumentenversandTyp', Type\DokumentenversandTyp::class),
//            new ClassMap('uebergabeDokumenteTyp', Type\UebergabeDokumenteTyp::class),
//            new ClassMap('stelleAntragAntwortTyp', Type\StelleAntragAntwortTyp::class),
//            new ClassMap('rechtsgeschaeftTyp', Type\RechtsgeschaeftTyp::class),
//            new ClassMap('pruefeBonitaetAnfrageTyp', Type\PruefeBonitaetAnfrageTyp::class),
        ]);
    }

    public function __construct($number)
    {
        if (!preg_match('#^(\+[0-9]{1,2}|0[0-9]{2,4})\s*[0-9\.\-\/\(\)]\s*[0-9\.\-\/\(\) ]+$#', $number)) {
            throw new \InvalidArgumentException('wrong number');
        }

        $this->number = $number;
    }
}
