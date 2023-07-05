<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
namespace GuzzleHttp\Promise;

/**
 * Exception thrown when too many errors occur in the some() or any() methods.
 */
class AggregateException extends RejectionException
{
<<<<<<< HEAD
    public function __construct($msg, array $reasons)
=======
    public function __construct(string $msg, array $reasons)
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    {
        parent::__construct(
            $reasons,
            sprintf('%s; %d rejected promises', $msg, count($reasons))
        );
    }
}
