<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner\Extension;

use function class_exists;
use function sprintf;
use PHPUnit\Framework\TestListener;
use PHPUnit\Runner\Exception;
use PHPUnit\Runner\Hook;
use PHPUnit\TextUI\TestRunner;
use PHPUnit\TextUI\XmlConfiguration\Extension;
use ReflectionClass;
use ReflectionException;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExtensionHandler
{
    /**
     * @throws Exception
     */
    public function registerExtension(Extension $extensionConfiguration, TestRunner $runner): void
    {
        $extension = $this->createInstance($extensionConfiguration);

        if (!$extension instanceof Hook) {
            throw new Exception(
                sprintf(
                    'Class "%s" does not implement a PHPUnit\Runner\Hook interface',
<<<<<<< HEAD
                    $extensionConfiguration->className()
                )
=======
                    $extensionConfiguration->className(),
                ),
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
            );
        }

        $runner->addExtension($extension);
    }

    /**
     * @throws Exception
     *
     * @deprecated
     */
    public function createTestListenerInstance(Extension $listenerConfiguration): TestListener
    {
        $listener = $this->createInstance($listenerConfiguration);

        if (!$listener instanceof TestListener) {
            throw new Exception(
                sprintf(
                    'Class "%s" does not implement the PHPUnit\Framework\TestListener interface',
<<<<<<< HEAD
                    $listenerConfiguration->className()
                )
=======
                    $listenerConfiguration->className(),
                ),
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
            );
        }

        return $listener;
    }

    /**
     * @throws Exception
     */
    private function createInstance(Extension $extensionConfiguration): object
    {
        $this->ensureClassExists($extensionConfiguration);

        try {
            $reflector = new ReflectionClass($extensionConfiguration->className());
        } catch (ReflectionException $e) {
            throw new Exception(
                $e->getMessage(),
                $e->getCode(),
<<<<<<< HEAD
                $e
=======
                $e,
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
            );
        }

        if (!$extensionConfiguration->hasArguments()) {
            return $reflector->newInstance();
        }

        return $reflector->newInstanceArgs($extensionConfiguration->arguments());
    }

    /**
     * @throws Exception
     */
    private function ensureClassExists(Extension $extensionConfiguration): void
    {
        if (class_exists($extensionConfiguration->className(), false)) {
            return;
        }

        if ($extensionConfiguration->hasSourceFile()) {
            /**
             * @noinspection PhpIncludeInspection
             *
             * @psalm-suppress UnresolvableInclude
             */
            require_once $extensionConfiguration->sourceFile();
        }

        if (!class_exists($extensionConfiguration->className())) {
            throw new Exception(
                sprintf(
                    'Class "%s" does not exist',
<<<<<<< HEAD
                    $extensionConfiguration->className()
                )
=======
                    $extensionConfiguration->className(),
                ),
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
            );
        }
    }
}
