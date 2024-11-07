<?php

namespace PlusForta\RuVSoapBundle\Type;

class IdentityCompanyTyp
{
    private string $name;
    private string $userid;
    private string $userGroup;
    private string $userDomain;
    private string $agencyNumber;
    private string $salesTaxID;

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): self
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getUserid(): string
    {
        return $this->userid;
    }

    public function withUserid(string $userid): self
    {
        $new = clone $this;
        $new->userid = $userid;

        return $new;
    }

    public function getUserGroup(): string
    {
        return $this->userGroup;
    }

    public function withUserGroup(string $userGroup): self
    {
        $new = clone $this;
        $new->userGroup = $userGroup;

        return $new;
    }

    public function getUserDomain(): string
    {
        return $this->userDomain;
    }

    public function withUserDomain(string $userDomain): self
    {
        $new = clone $this;
        $new->userDomain = $userDomain;

        return $new;
    }

    public function getAgencyNumber(): string
    {
        return $this->agencyNumber;
    }

    public function withAgencyNumber(string $agencyNumber): self
    {
        $new = clone $this;
        $new->agencyNumber = $agencyNumber;

        return $new;
    }

    public function getSalesTaxID(): string
    {
        return $this->salesTaxID;
    }

    public function withSalesTaxID(string $salesTaxID): self
    {
        $new = clone $this;
        $new->salesTaxID = $salesTaxID;

        return $new;
    }
}
