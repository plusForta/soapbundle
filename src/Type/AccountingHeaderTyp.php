<?php

namespace PlusForta\RuVSoapBundle\Type;

class AccountingHeaderTyp
{
    /**
     * @var string
     */
    private $costCenterID;

    /**
     * @return string
     */
    public function getCostCenterID()
    {
        return $this->costCenterID;
    }

    /**
     * @param string $costCenterID
     * @return AccountingHeaderTyp
     */
    public function withCostCenterID($costCenterID)
    {
        $new = clone $this;
        $new->costCenterID = $costCenterID;

        return $new;
    }
}
