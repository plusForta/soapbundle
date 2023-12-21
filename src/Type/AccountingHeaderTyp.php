<?php

namespace PlusForta\RuVSoapBundle\Type;

class AccountingHeaderTyp
{
    private ?string $costCenterID;

    public function getCostCenterID(): ?string
    {
        return $this->costCenterID;
    }

    public function withCostCenterID(string $costCenterID): AccountingHeaderTyp
    {
        $new = clone $this;
        $new->costCenterID = $costCenterID;

        return $new;
    }
}

