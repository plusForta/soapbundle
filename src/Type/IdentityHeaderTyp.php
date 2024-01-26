<?php

namespace PlusForta\RuVSoapBundle\Type;

class IdentityHeaderTyp
{
    private IdentityCompanyTyp $Company;

    public function getCompany(): IdentityCompanyTyp
    {
        return $this->Company;
    }

    public function withCompany(IdentityCompanyTyp $Company): self
    {
        $new = clone $this;
        $new->Company = $Company;

        return $new;
    }
}