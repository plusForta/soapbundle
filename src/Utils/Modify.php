<?php


namespace PlusForta\RuVSoapBundle\Utils;


class Modify
{
    public static function trimOrNull(?string $value, int $length): ?string
    {
        if ($value === null) {
            return null;
        }

        return self::trim($value, $length);
    }

    public static function trim(string $value, int $length, bool $isNameField = false): string
    {
        $sanitizedString = self::sanitizeString($value, $isNameField);

        if (strlen($sanitizedString) <= $length) {
            return $sanitizedString;
        }

        $trace = self::getTrace();
        self::logTrace($trace);

        return mb_strcut($sanitizedString, 0, $length);
    }

    public static function sanitizeString(string $inputString, bool $isNameField): string
    {
        $pattern = $isNameField ? "/[^a-zA-ZäöüßÄÖÜ ()+&\\\-_\/:'éıćáčşğłóšİńŞėžèâíũċżëìñČĆĞŁŃÇŻŠÁŚÉ]/u"
                                : "/[^a-zA-ZäöüßÄÖÜ ,.()+&\\\-_\/:'éıćáčşğłóšİńŞėžèâíũċżëìñČĆĞŁŃÇŻŠÁŚÉ0-9]/u";

        // Replace all characters that do not match the allowed pattern
        return preg_replace($pattern, '', $inputString);
    }

    private static function getTrace() {
		$trace = debug_backtrace();

		return $trace[1];
	}

    private static function logTrace($trace): void
    {
        $function = $trace['function'];
        $file = $trace['file'];
        $line = $trace['line'];
        $args = implode(', ', $trace['args']);
        $message = "Value is truncated: $function($args) in $file:$line";
        error_log($message);
    }
}