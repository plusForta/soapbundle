<?php

namespace PlusForta\RuVSoapBundle\Type;

class StatisticHeaderTyp
{

    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $application;

    /**
     * @var string
     */
    private $applicationRelease;

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     * @return StatisticHeaderTyp
     */
    public function withChannel($channel)
    {
        $new = clone $this;
        $new->channel = $channel;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @param string $application
     * @return StatisticHeaderTyp
     */
    public function withApplication($application)
    {
        $new = clone $this;
        $new->application = $application;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationRelease()
    {
        return $this->applicationRelease;
    }

    /**
     * @param string $applicationRelease
     * @return StatisticHeaderTyp
     */
    public function withApplicationRelease($applicationRelease)
    {
        $new = clone $this;
        $new->applicationRelease = $applicationRelease;

        return $new;
    }


}

