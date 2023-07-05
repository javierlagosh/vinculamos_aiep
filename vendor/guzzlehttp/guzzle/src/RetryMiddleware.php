<?php

namespace GuzzleHttp;

use GuzzleHttp\Promise as P;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Middleware that retries requests based on the boolean result of
 * invoking the provided "decider" function.
 *
 * @final
 */
class RetryMiddleware
{
    /**
     * @var callable(RequestInterface, array): PromiseInterface
     */
    private $nextHandler;

    /**
     * @var callable
     */
    private $decider;

    /**
     * @var callable(int)
     */
    private $delay;

    /**
     * @param callable                                            $decider     Function that accepts the number of retries,
     *                                                                         a request, [response], and [exception] and
     *                                                                         returns true if the request is to be
     *                                                                         retried.
     * @param callable(RequestInterface, array): PromiseInterface $nextHandler Next handler to invoke.
     * @param (callable(int): int)|null                           $delay       Function that accepts the number of retries
     *                                                                         and returns the number of
     *                                                                         milliseconds to delay.
     */
    public function __construct(callable $decider, callable $nextHandler, callable $delay = null)
    {
        $this->decider = $decider;
        $this->nextHandler = $nextHandler;
<<<<<<< HEAD
        $this->delay = $delay ?: __CLASS__ . '::exponentialDelay';
=======
        $this->delay = $delay ?: __CLASS__.'::exponentialDelay';
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    }

    /**
     * Default exponential backoff delay function.
     *
     * @return int milliseconds.
     */
    public static function exponentialDelay(int $retries): int
    {
<<<<<<< HEAD
        return (int) \pow(2, $retries - 1) * 1000;
=======
        return (int) 2 ** ($retries - 1) * 1000;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    }

    public function __invoke(RequestInterface $request, array $options): PromiseInterface
    {
        if (!isset($options['retries'])) {
            $options['retries'] = 0;
        }

        $fn = $this->nextHandler;
<<<<<<< HEAD
=======

>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
        return $fn($request, $options)
            ->then(
                $this->onFulfilled($request, $options),
                $this->onRejected($request, $options)
            );
    }

    /**
     * Execute fulfilled closure
     */
    private function onFulfilled(RequestInterface $request, array $options): callable
    {
        return function ($value) use ($request, $options) {
            if (!($this->decider)(
                $options['retries'],
                $request,
                $value,
                null
            )) {
                return $value;
            }
<<<<<<< HEAD
=======

>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
            return $this->doRetry($request, $options, $value);
        };
    }

    /**
     * Execute rejected closure
     */
    private function onRejected(RequestInterface $req, array $options): callable
    {
        return function ($reason) use ($req, $options) {
            if (!($this->decider)(
                $options['retries'],
                $req,
                null,
                $reason
            )) {
                return P\Create::rejectionFor($reason);
            }
<<<<<<< HEAD
=======

>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
            return $this->doRetry($req, $options);
        };
    }

    private function doRetry(RequestInterface $request, array $options, ResponseInterface $response = null): PromiseInterface
    {
        $options['delay'] = ($this->delay)(++$options['retries'], $response, $request);

        return $this($request, $options);
    }
}
