<?php


namespace PlusForta\RuVSoapBundle\Utils;

class Modify
{
    public static function trimOrNull(?string $value, int $length): ?string
    {
        if ($value === null) {
            return null;
        }
        if (mb_strlen($value) <= $length) {
            return $value;
        }

        return self::trim($value, $length);
    }

    public static function trim(string $value, int $length): string
    {
        if (mb_strlen($value) <= $length) {
            return $value;
        }

        return mb_strcut($value, 0, $length);
    }

    /**
     * Sanitizes a string by replacing special characters with equivalents and removing disallowed ones.
     */
    public static function sanitizeString(string $inputString, bool $isNameField = false): string
    {
        $replacements = [
            'é' => 'e', 'ı' => 'i', 'ć' => 'c', 'á' => 'a', 'č' => 'c', 'ş' => 's', 'ğ' => 'g', 'ł' => 'l', 'ó' => 'o',
            'İ' => 'I', 'ń' => 'n', 'Ş' => 'S', 'ė' => 'e', 'ž' => 'z', 'è' => 'e', 'â' => 'a', 'í' => 'i', 'ũ' => 'u',
            'ż' => 'z', 'ë' => 'e', 'ì' => 'i', 'ñ' => 'n', 'Č' => 'C', 'Ć' => 'C', 'Ğ' => 'G', 'Ł' => 'L', 'Ń' => 'N',
            'Ç' => 'C', 'Ż' => 'Z', 'Š' => 'S', 'Á' => 'A', 'Ś' => 'S', 'É' => 'E', 'š' => 's', 'ċ' => 'c',
        ];

        $inputString = strtr($inputString, $replacements);

        $pattern = $isNameField ? "/[^a-zA-ZäöüßÄÖÜ& ()\+\\_\/:\-]/u"
            : "/[^a-zA-ZäöüßÄÖÜ& ,\.()\+\\_\/:'0-9\-]/u";

        // Remove disallowed characters
        return preg_replace($pattern, '', $inputString);
    }
}
