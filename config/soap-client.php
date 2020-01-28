<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;

return Config::create()
    ->setEngine(ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults(getenv('WSDL'), [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Type')
    ->setTypeNamespace('PlusForta\RuVSoapBundle\Type')
    ->setClientDestination('src')
    ->setClientName('RuvSoapClient')
    ->setClientNamespace('PlusForta\RuVSoapBundle')
    ->setClassMapDestination('src')
    ->setClassMapName('RuvSoapClientClassmap')
    ->setClassMapNamespace('PlusForta\RuVSoapBundle')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
;
