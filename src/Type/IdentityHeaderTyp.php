<?php

namespace PlusForta\RuVSoapBundle\Type;

class IdentityHeaderTyp
{

    /**
     * @var \PlusForta\RuVSoapBundle\Type\IdentityCompanyTyp
     */
    private $Company;

    /**
     * @return \PlusForta\RuVSoapBundle\Type\IdentityCompanyTyp
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\IdentityCompanyTyp $Company
     * @return IdentityHeaderTyp
     */
    public function withCompany($Company)
    {
        $new = clone $this;
        $new->Company = $Company;

        return $new;
    }


}

