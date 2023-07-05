<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report;

use function dirname;
use function file_put_contents;
use function serialize;
<<<<<<< HEAD
use function sprintf;
=======
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
use SebastianBergmann\CodeCoverage\CodeCoverage;
use SebastianBergmann\CodeCoverage\Driver\WriteOperationFailedException;
use SebastianBergmann\CodeCoverage\Util\Filesystem;

final class PHP
{
    public function process(CodeCoverage $coverage, ?string $target = null): string
    {
<<<<<<< HEAD
        $buffer = sprintf(
            "<?php
return \unserialize(<<<'END_OF_COVERAGE_SERIALIZATION'%s%s%sEND_OF_COVERAGE_SERIALIZATION%s);",
            PHP_EOL,
            serialize($coverage),
            PHP_EOL,
            PHP_EOL
        );
=======
        $buffer = "<?php
return \unserialize(<<<'END_OF_COVERAGE_SERIALIZATION'" . PHP_EOL . serialize($coverage) . PHP_EOL . 'END_OF_COVERAGE_SERIALIZATION' . PHP_EOL . ');';
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

        if ($target !== null) {
            Filesystem::createDirectory(dirname($target));

            if (@file_put_contents($target, $buffer) === false) {
                throw new WriteOperationFailedException($target);
            }
        }

        return $buffer;
    }
}
