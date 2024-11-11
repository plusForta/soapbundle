<?php

namespace PlusForta\RuVSoapBundle\Type;

class IdentityCompanyTyp
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $userGroup;

    /**
     * @var string
     */
    private $userDomain;

    /**
     * @var string
     */
    private $agencyNumber;

    /**
     * @var string
     */
    private $salesTaxID;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return IdentityCompanyTyp
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param string $userid
     * @return IdentityCompanyTyp
     */
    public function withUserid($userid)
    {
        $new = clone $this;
        $new->userid = $userid;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }

    /**
     * @param string $userGroup
     * @return IdentityCompanyTyp
     */
    public function withUserGroup($userGroup)
    {
        $new = clone $this;
        $new->userGroup = $userGroup;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserDomain()
    {
        return $this->userDomain;
    }

    /**
     * @param string $userDomain
     * @return IdentityCompanyTyp
     */
    public function withUserDomain($userDomain)
    {
        $new = clone $this;
        $new->userDomain = $userDomain;

        return $new;
    }

    /**
     * @return string
     */
    public function getAgencyNumber()
    {
        return $this->agencyNumber;
    }

    /**
     * @param string $agencyNumber
     * @return IdentityCompanyTyp
     */
    public function withAgencyNumber($agencyNumber)
    {
        $new = clone $this;
        $new->agencyNumber = $agencyNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getSalesTaxID()
    {
        return $this->salesTaxID;
    }

    /**
     * @param string $salesTaxID
     * @return IdentityCompanyTyp
     */
    public function withSalesTaxID($salesTaxID)
    {
        $new = clone $this;
        $new->salesTaxID = $salesTaxID;

        return $new;
    }
}
