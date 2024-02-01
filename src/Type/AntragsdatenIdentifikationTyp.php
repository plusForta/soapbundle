<?php


namespace PlusForta\RuVSoapBundle\Type;

class AntragsdatenIdentifikationTyp
{

    public ?string $AntragsdatenID;
    public ?string $BuergschaftstextVersion;

    public function withAntragsdatenID(?string $AntragsdatenID): AntragsdatenIdentifikationTyp
    {
        $new = clone $this;
        if ($AntragsdatenID !== null) {
            $this->AntragsdatenID = $AntragsdatenID;
        }

        return $new;
    }

    public function withBuergschaftstextVersion(?string $BuergschaftstextVersion): AntragsdatenIdentifikationTyp
    {
        $new = clone $this;
        if ($BuergschaftstextVersion !== null) {
            $this->BuergschaftstextVersion = $BuergschaftstextVersion;
        }

        return $new;
    }
}