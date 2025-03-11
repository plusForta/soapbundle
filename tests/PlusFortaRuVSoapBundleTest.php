<?php

namespace PlusForta\RuVSoapBundle\Tests;

use PHPUnit\Framework\TestCase;
use PlusForta\RuVSoapBundle\DependencyInjection\PlusFortaRuVSoapExtension;
use PlusForta\RuVSoapBundle\PlusFortaRuVSoapBundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

/**
 * Test class for PlusFortaRuVSoapBundle.
 *
 * It focuses on testing the behavior of the `getContainerExtension` method,
 * which ensures that the proper extension is loaded lazily and returned correctly.
 */
class PlusFortaRuVSoapBundleTest extends TestCase
{
    /**
     * Tests that the `getContainerExtension` method returns an instance
     * of `PlusFortaRuVSoapExtension` when called for the first time.
     */
    public function testGetContainerExtensionReturnsCorrectExtension(): void
    {
        $bundle = new PlusFortaRuVSoapBundle();
        $extension = $bundle->getContainerExtension();

        $this->assertInstanceOf(PlusFortaRuVSoapExtension::class, $extension);
    }

    /**
     * Tests that the `getContainerExtension` method always returns the same instance.
     */
    public function testGetContainerExtensionReturnsSameInstance(): void
    {
        $bundle = new PlusFortaRuVSoapBundle();
        $firstCall = $bundle->getContainerExtension();
        $secondCall = $bundle->getContainerExtension();

        $this->assertSame($firstCall, $secondCall);
    }

    /**
     * Tests that the `getContainerExtension` method returns an instance
     * implementing ExtensionInterface.
     */
    public function testGetContainerExtensionImplementsExtensionInterface(): void
    {
        $bundle = new PlusFortaRuVSoapBundle();
        $extension = $bundle->getContainerExtension();

        $this->assertInstanceOf(ExtensionInterface::class, $extension);
    }
}