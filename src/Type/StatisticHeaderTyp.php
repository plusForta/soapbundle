<?php

namespace PlusForta\RuVSoapBundle\Type;

class StatisticHeaderTyp
{
    private string $channel;
    private string $application;
    private string $applicationRelease;

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function withChannel(string $channel): self
    {
        $new = clone $this;
        $new->channel = $channel;

        return $new;
    }

    public function getApplication(): string
    {
        return $this->application;
    }

    public function withApplication(string $application): self
    {
        $new = clone $this;
        $new->application = $application;

        return $new;
    }

    public function getApplicationRelease(): string
    {
        return $this->applicationRelease;
    }

    public function withApplicationRelease(string $applicationRelease): self
    {
        $new = clone $this;
        $new->applicationRelease = $applicationRelease;

        return $new;
    }
}
