<?php

declare(strict_types=1);

namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Lazily reads or writes to a file that is opened only after an IO operation
 * take place on the stream.
 */
<<<<<<< HEAD
#[\AllowDynamicProperties]
=======
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
final class LazyOpenStream implements StreamInterface
{
    use StreamDecoratorTrait;

    /** @var string */
    private $filename;

    /** @var string */
    private $mode;

    /**
<<<<<<< HEAD
=======
     * @var StreamInterface
     */
    private $stream;

    /**
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     * @param string $filename File to lazily open
     * @param string $mode     fopen mode to use when opening the stream
     */
    public function __construct(string $filename, string $mode)
    {
        $this->filename = $filename;
        $this->mode = $mode;
<<<<<<< HEAD
=======

        // unsetting the property forces the first access to go through
        // __get().
        unset($this->stream);
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    }

    /**
     * Creates the underlying stream lazily when required.
     */
    protected function createStream(): StreamInterface
    {
        return Utils::streamFor(Utils::tryFopen($this->filename, $this->mode));
    }
}
