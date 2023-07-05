<?php

/*
 * This file is part of Psy Shell.
 *
<<<<<<< HEAD
 * (c) 2012-2022 Justin Hileman
=======
 * (c) 2012-2023 Justin Hileman
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Exception;

/**
 * A "type error" Exception for Psy.
 */
class TypeErrorException extends \Exception implements Exception
{
    private $rawMessage;

    /**
     * Constructor!
     *
<<<<<<< HEAD
     * @param string $message (default: "")
     * @param int    $code    (default: 0)
     */
    public function __construct(string $message = '', int $code = 0)
    {
        $this->rawMessage = $message;
        $message = \preg_replace('/, called in .*?: eval\\(\\)\'d code/', '', $message);
        parent::__construct(\sprintf('TypeError: %s', $message), $code);
=======
     * @deprecated PsySH no longer wraps TypeErrors
     *
     * @param string          $message  (default: "")
     * @param int             $code     (default: 0)
     * @param \Throwable|null $previous (default: null)
     */
    public function __construct(string $message = '', int $code = 0, \Throwable $previous = null)
    {
        $this->rawMessage = $message;
        $message = \preg_replace('/, called in .*?: eval\\(\\)\'d code/', '', $message);
        parent::__construct(\sprintf('TypeError: %s', $message), $code, $previous);
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    }

    /**
     * Get the raw (unformatted) message for this error.
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     */
    public function getRawMessage(): string
    {
        return $this->rawMessage;
    }

    /**
     * Create a TypeErrorException from a TypeError.
     *
<<<<<<< HEAD
     * @param \TypeError $e
     *
     * @return self
     */
    public static function fromTypeError(\TypeError $e): self
    {
        return new self($e->getMessage(), $e->getCode());
=======
     * @deprecated PsySH no longer wraps TypeErrors
     *
     * @param \TypeError $e
     */
    public static function fromTypeError(\TypeError $e): self
    {
        return new self($e->getMessage(), $e->getCode(), $e);
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    }
}
