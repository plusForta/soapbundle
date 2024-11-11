<?php

namespace PlusForta\RuVSoapBundle\Type;

class WerbewiderspruchTyp
{
    /**
     * @var bool
     */
    private $KeineTelefonWerbung = false;

    /**
     * @var bool
     */
    private $KeineEMailWerbung = false;

    /**
     * @var bool
     */
    private $KeineDatenweitergabe = false;

    /**
     * @var bool
     */
    private $KeineSchriftlicheWerbung = false;

    /**
     * @return bool
     */
    public function getKeineTelefonWerbung()
    {
        return $this->KeineTelefonWerbung;
    }

    /**
     * @param bool $KeineTelefonWerbung
     * @return WerbewiderspruchTyp
     */
    public function withKeineTelefonWerbung($KeineTelefonWerbung)
    {
        $new = clone $this;
        $new->KeineTelefonWerbung = $KeineTelefonWerbung;

        return $new;
    }

    /**
     * @return bool
     */
    public function getKeineEMailWerbung()
    {
        return $this->KeineEMailWerbung;
    }

    /**
     * @param bool $KeineEMailWerbung
     * @return WerbewiderspruchTyp
     */
    public function withKeineEMailWerbung($KeineEMailWerbung)
    {
        $new = clone $this;
        $new->KeineEMailWerbung = $KeineEMailWerbung;

        return $new;
    }

    /**
     * @return bool
     */
    public function getKeineDatenweitergabe()
    {
        return $this->KeineDatenweitergabe;
    }

    /**
     * @param bool $KeineDatenweitergabe
     * @return WerbewiderspruchTyp
     */
    public function withKeineDatenweitergabe($KeineDatenweitergabe)
    {
        $new = clone $this;
        $new->KeineDatenweitergabe = $KeineDatenweitergabe;

        return $new;
    }

    /**
     * @return bool
     */
    public function getKeineSchriftlicheWerbung()
    {
        return $this->KeineSchriftlicheWerbung;
    }

    /**
     * @param bool $KeineSchriftlicheWerbung
     * @return WerbewiderspruchTyp
     */
    public function withKeineSchriftlicheWerbung($KeineSchriftlicheWerbung)
    {
        $new = clone $this;
        $new->KeineSchriftlicheWerbung = $KeineSchriftlicheWerbung;

        return $new;
    }
}
