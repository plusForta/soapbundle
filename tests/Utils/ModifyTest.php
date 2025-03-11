<?php

namespace PlusForta\RuVSoapBundle\Tests\Utils;

use Monolog\Test\TestCase;
use PlusForta\RuVSoapBundle\Utils\Modify;

/**
 * Test class for Modify::sanitizeString method.
 *
 * This class tests the sanitizeString method, covering various scenarios
 * to ensure that special characters are replaced and disallowed characters
 * are removed appropriately based on the use case.
 */
class ModifyTest extends TestCase
{
    /**
     * Test sanitization with special character replacements.
     */
    public function testSanitizeStringReplacesSpecialCharacters(): void
    {
        $input = 'éğşÇÁ';
        $expected = 'egsCA';
        $this->assertSame($expected, Modify::sanitizeString($input));
    }

    /**
     * Test trimOrNull with null input.
     */
    public function testTrimOrNullWithNullInput(): void
    {
        $input = null;
        $length = 10;
        $expected = null;
        $this->assertSame($expected, Modify::trimOrNull($input, $length));
    }

    /**
     * Test trimOrNull with a string shorter than the specified length.
     */
    public function testTrimOrNullWithShorterString(): void
    {
        $input = 'Short';
        $length = 10;
        $expected = 'Short';
        $this->assertSame($expected, Modify::trimOrNull($input, $length));
    }

    /**
     * Test trimOrNull with a string equal to the specified length.
     */
    public function testTrimOrNullWithEqualLengthString(): void
    {
        $input = 'Exact';
        $length = 5;
        $expected = 'Exact';
        $this->assertSame($expected, Modify::trimOrNull($input, $length));
    }

    /**
     * Test trimOrNull with a string longer than the specified length.
     */
    public function testTrimOrNullWithLongerString(): void
    {
        $input = 'This is a long string';
        $length = 10;
        $expected = 'This is a ';
        $this->assertSame($expected, Modify::trimOrNull($input, $length));
    }

    /**
     * Test trimOrNull with an empty string.
     */
    public function testTrimOrNullWithEmptyString(): void
    {
        $input = '';
        $length = 5;
        $expected = '';
        $this->assertSame($expected, Modify::trimOrNull($input, $length));
    }

    /**
     * Test trimOrNull with multibyte characters.
     */
    public function testTrimOrNullWithMultibyteCharacters(): void
    {
        $input = 'Sparkasse München';
        $length = 12;
        $expected = 'Sparkasse M';
        $this->assertSame($expected, Modify::trimOrNull($input, $length));
    }

    /**
     * Test trimOrNull with multibyte characters.
     */
    public function testTrimOrNullWithMultibyteCharactersSplit(): void
    {
        $input = 'Sparkasse München';
        $length = 13;
        $expected = 'Sparkasse Mü';
        $this->assertSame($expected, Modify::trimOrNull($input, $length));
    }

    /**
     * Test sanitization allows valid string characters for name fields.
     */
    public function testSanitizeStringAllowsValidNameFieldCharacters(): void
    {
        $input = 'John (Smith)+&';
        $expected = 'John (Smith)+&';
        $this->assertSame($expected, Modify::sanitizeString($input, true));
    }

    /**
     * Test sanitization removes disallowed characters for name fields.
     */
    public function testSanitizeStringRemovesInvalidNameFieldCharacters(): void
    {
        $input = 'John Smith$#@!.,';
        $expected = 'John Smith';
        $this->assertSame($expected, Modify::sanitizeString($input, true));
    }

    /**
     * Test sanitization allows valid string characters for general input.
     */
    public function testSanitizeStringAllowsValidGeneralCharacters(): void
    {
        $input = 'Hello World,123.+&:';
        $expected = 'Hello World,123.+&:';
        $this->assertSame($expected, Modify::sanitizeString($input));
    }

    /**
     * Test sanitization removes disallowed characters for general input.
     */
    public function testSanitizeStringRemovesInvalidGeneralCharacters(): void
    {
        $input = 'Hello@World$!.,';
        $expected = 'HelloWorld.,';
        $this->assertSame($expected, Modify::sanitizeString($input));
    }

    /**
     * Test trimming a string shorter than the specified length.
     */
    public function testTrimWithStringShorterThanLength(): void
    {
        $input = 'Short';
        $length = 10;
        $expected = 'Short';
        $this->assertSame($expected, Modify::trim($input, $length));
    }

    /**
     * Test trimming a string exactly equal to the specified length.
     */
    public function testTrimWithStringEqualToLength(): void
    {
        $input = 'ExactLength';
        $length = 11;
        $expected = 'ExactLength';
        $this->assertSame($expected, Modify::trim($input, $length));
    }

    /**
     * Test trimming a string longer than the specified length.
     */
    public function testTrimWithStringLongerThanLength(): void
    {
        $input = 'This is a long string';
        $length = 10;
        $expected = 'This is a ';
        $this->assertSame($expected, Modify::trim($input, $length));
    }

    /**
     * Test trimming a string containing multibyte characters.
     */
    public function testTrimWithMultibyteCharacters(): void
    {
        $input = 'Jürgen Klinsmann';
        $length = 2;
        $expected = 'J';
        $this->assertSame($expected, Modify::trim($input, $length));
    }

    /**
     * Test trimming an empty string.
     */
    public function testTrimWithEmptyString(): void
    {
        $input = '';
        $length = 5;
        $expected = '';
        $this->assertSame($expected, Modify::trim($input, $length));
    }

    /**
     * Test sanitization with an empty string as input.
     */
    public function testSanitizeStringWithEmptyInput(): void
    {
        $input = '';
        $expected = '';
        $this->assertSame($expected, Modify::sanitizeString($input));
    }

    /**
     * Test sanitization with a string that contains only invalid characters.
     */
    public function testSanitizeStringWithOnlyInvalidCharacters(): void
    {
        $input = '@#$%^*';
        $expected = '';
        $this->assertSame($expected, Modify::sanitizeString($input));
    }

    /**
     * Test sanitization with numeric and special characters for general input.
     */
    public function testSanitizeStringKeepsNumbersAndSpecialCharacters(): void
    {
        $input = '1234567890-_.';
        $expected = '1234567890-_.';
        $this->assertSame($expected, Modify::sanitizeString($input));
    }

    /**
     * Test sanitization with umlauts and additional allowed characters.
     */
    public function testSanitizeStringWithUmlauts(): void
    {
        $input = 'ÄÖÜäßáéöè';
        $expected = 'ÄÖÜäßaeöe';
        $this->assertSame($expected, Modify::sanitizeString($input));
    }

    /**
     * Test sanitization with mixed valid and invalid characters for name fields.
     */
    public function testSanitizeStringMixedCharactersForNameField(): void
    {
        $input = 'Jane&@+_,Doe!.';
        $expected = 'Jane&+_Doe';
        $this->assertSame($expected, Modify::sanitizeString($input, true));
    }

    /**
     * Test sanitization removes completely invalid strings.
     */
    public function testSanitizeStringWithOnlyInvalidCharactersForNameField(): void
    {
        $input = '#####@!';
        $expected = ''; // Only invalid characters, results in an empty string
        $this->assertSame($expected, Modify::sanitizeString($input, true));
    }

    /**
     * Test sanitization with special European characters and name fields.
     */
    public function testSanitizeStringWithSpecialCharactersForNameField(): void
    {
        $input = 'Jürgen (Größ)+!,.';
        $expected = 'Jürgen (Größ)+'; // Special European characters and allowed symbols remain
        $this->assertSame($expected, Modify::sanitizeString($input, true));
    }

    /**
     * Test sanitization with valid numbers and punctuation (not allowed in name fields).
     */
    public function testSanitizeStringRemovesNumbersForNameField(): void
    {
        $input = 'John123 Smith!';
        $expected = 'John Smith'; // Numbers and invalid punctuation (!) are removed
        $this->assertSame($expected, Modify::sanitizeString($input, true));
    }


}