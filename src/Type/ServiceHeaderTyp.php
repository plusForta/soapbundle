<?php

namespace PlusForta\RuVSoapBundle\Type;

class ServiceHeaderTyp
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $method;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ServiceHeaderTyp
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
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return ServiceHeaderTyp
     */
    public function withVersion($version)
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return ServiceHeaderTyp
     */
    public function withMethod($method)
    {
        $new = clone $this;
        $new->method = $method;

        return $new;
    }


}

