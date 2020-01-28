<?php

namespace PlusForta\RuVSoapBundle\Type;

use DateTimeImmutable;

/**
 * @property string Einzugsdatum
 */
class MietvertragTyp
{

    /**
     * @var string
     */
    private $MietvertragVom;

    /**
     * @return string
     */
    public function getMietvertragVom()
    {
        return $this->MietvertragVom;
    }

    /**
     * @param DateTimeImmutable $MietvertragVom
     * @return MietvertragTyp
     */
    public function withMietvertragVom(DateTimeImmutable $MietvertragVom): MietvertragTyp
    {
        $new = clone $this;
        $new->MietvertragVom = $MietvertragVom->format('d.m.Y');

        return $new;
    }

    /**
     * @param ?DateTimeImmutable $Einzugsdatum
     * @return MietvertragTyp
     */
    public function withEinzugsdatum(?DateTimeImmutable $Einzugsdatum): MietvertragTyp
    {
        $new = clone $this;
        if ($Einzugsdatum !== null) {
            $new->Einzugsdatum = $Einzugsdatum->format('d.m.Y');
        }

        return $new;
    }


}

