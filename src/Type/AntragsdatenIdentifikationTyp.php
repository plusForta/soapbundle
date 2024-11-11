<?php


namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property string|null AntragsdatenID
 * @property string|null BuergschaftstextVersion
 */
class AntragsdatenIdentifikationTyp
{
    public function withAntragsdatenID(?string $AntragsdatenID)
    {
        $new = clone $this;
        if ($AntragsdatenID !== null) {
            $this->AntragsdatenID = $AntragsdatenID;
        }

        return $new;
    }

    public function withBuergschaftstextVersion(?string $BuergschaftstextVersion)
    {
        $new = clone $this;
        if ($BuergschaftstextVersion !== null) {
            $this->BuergschaftstextVersion = $BuergschaftstextVersion;
        }

        return $new;
    }
}
