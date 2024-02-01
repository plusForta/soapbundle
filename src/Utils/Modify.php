<?php


namespace PlusForta\RuVSoapBundle\Utils;


class Modify
{
    public static function trimOrNull(?string $value, int $length): ?string
    {
        if ($value === null) {
            return null;
        }
        if (strlen($value) <= $length) {
            return $value;
        }

        $trace = self::getTrace();
        self::logTrace($trace);

        return mb_strcut($value, 0, $length);
    }

    public static function trim(string $value, int $length): string
    {
        if (strlen($value) <= $length) {
            return $value;
        }

        $trace = self::getTrace();
        self::logTrace($trace);

        return mb_strcut($value, 0, $length);
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