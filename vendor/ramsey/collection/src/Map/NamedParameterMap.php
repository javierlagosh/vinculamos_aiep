<?php

/**
 * This file is part of the ramsey/collection library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license http://opensource.org/licenses/MIT MIT
 */

declare(strict_types=1);

namespace Ramsey\Collection\Map;

use Ramsey\Collection\Exception\InvalidArgumentException;
use Ramsey\Collection\Tool\TypeTrait;
use Ramsey\Collection\Tool\ValueToStringTrait;

use function array_combine;
use function array_key_exists;
use function is_int;
<<<<<<< HEAD
=======
use function var_export;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

/**
 * `NamedParameterMap` represents a mapping of values to a set of named keys
 * that may optionally be typed
 *
 * @extends AbstractMap<mixed>
 */
class NamedParameterMap extends AbstractMap
{
    use TypeTrait;
    use ValueToStringTrait;

    /**
     * Named parameters defined for this map.
     *
     * @var array<string, string>
     */
<<<<<<< HEAD
    protected $namedParameters;
=======
    protected array $namedParameters;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

    /**
     * Constructs a new `NamedParameterMap`.
     *
     * @param array<array-key, string> $namedParameters The named parameters defined for this map.
     * @param array<array-key, mixed> $data An initial set of data to set on this map.
     */
    public function __construct(array $namedParameters, array $data = [])
    {
        $this->namedParameters = $this->filterNamedParameters($namedParameters);
        parent::__construct($data);
    }

    /**
     * Returns named parameters set for this `NamedParameterMap`.
     *
     * @return array<string, string>
     */
    public function getNamedParameters(): array
    {
        return $this->namedParameters;
    }

    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value): void
    {
        if ($offset === null) {
            throw new InvalidArgumentException(
                'Map elements are key/value pairs; a key must be provided for '
<<<<<<< HEAD
                . 'value ' . var_export($value, true)
=======
                . 'value ' . var_export($value, true),
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
            );
        }

        if (!array_key_exists($offset, $this->namedParameters)) {
            throw new InvalidArgumentException(
                'Attempting to set value for unconfigured parameter \''
<<<<<<< HEAD
                . $offset . '\''
=======
                . $offset . '\'',
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
            );
        }

        if ($this->checkType($this->namedParameters[$offset], $value) === false) {
            throw new InvalidArgumentException(
                'Value for \'' . $offset . '\' must be of type '
                . $this->namedParameters[$offset] . '; value is '
<<<<<<< HEAD
                . $this->toolValueToString($value)
=======
                . $this->toolValueToString($value),
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
            );
        }

        $this->data[$offset] = $value;
    }

    /**
     * Given an array of named parameters, constructs a proper mapping of
     * named parameters to types.
     *
     * @param array<array-key, string> $namedParameters The named parameters to filter.
     *
     * @return array<string, string>
     */
    protected function filterNamedParameters(array $namedParameters): array
    {
        $names = [];
        $types = [];

        foreach ($namedParameters as $key => $value) {
            if (is_int($key)) {
                $names[] = $value;
                $types[] = 'mixed';
            } else {
                $names[] = $key;
                $types[] = $value;
            }
        }

        return array_combine($names, $types) ?: [];
    }
}
