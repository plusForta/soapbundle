<?php

namespace PlusForta\RuVSoapBundle\Type;

class KlauselTyp
{
    /**
     * @var string
     */
    private $Text;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     * @return KlauselTyp
     */
    public function withText($Text)
    {
        $new = clone $this;
        $new->Text = $Text;

        return $new;
    }
}

