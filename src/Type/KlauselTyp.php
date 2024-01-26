<?php

namespace PlusForta\RuVSoapBundle\Type;

class KlauselTyp
{
    private string $Text;

    public function getText(): string
    {
        return $this->Text;
    }

    public function withText(string $Text):self
    {
        $new = clone $this;
        $new->Text = $Text;

        return $new;
    }
}

