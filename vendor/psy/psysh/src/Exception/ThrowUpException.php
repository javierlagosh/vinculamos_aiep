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
 * A throw-up exception, used for throwing an exception out of the Psy Shell.
 */
class ThrowUpException extends \Exception implements Exception
{
    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function __construct(\Exception $exception)
    {
        $message = \sprintf("Throwing %s with message '%s'", \get_class($exception), $exception->getMessage());
        parent::__construct($message, $exception->getCode(), $exception);
=======
    public function __construct(\Throwable $throwable)
    {
        $message = \sprintf("Throwing %s with message '%s'", \get_class($throwable), $throwable->getMessage());
        parent::__construct($message, $throwable->getCode(), $throwable);
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    }

    /**
     * Return a raw (unformatted) version of the error message.
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     */
    public function getRawMessage(): string
    {
        return $this->getPrevious()->getMessage();
    }

    /**
     * Create a ThrowUpException from a Throwable.
     *
<<<<<<< HEAD
     * @param \Throwable $throwable
     *
     * @return self
=======
     * @deprecated PsySH no longer wraps Throwables
     *
     * @param \Throwable $throwable
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     */
    public static function fromThrowable($throwable): self
    {
        if ($throwable instanceof \Error) {
            $throwable = ErrorException::fromError($throwable);
        }

        if (!$throwable instanceof \Exception) {
            throw new \InvalidArgumentException('throw-up can only throw Exceptions and Errors');
        }

        return new self($throwable);
    }
}
