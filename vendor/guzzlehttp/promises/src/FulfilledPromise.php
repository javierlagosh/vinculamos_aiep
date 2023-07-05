<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
namespace GuzzleHttp\Promise;

/**
 * A promise that has been fulfilled.
 *
 * Thenning off of this promise will invoke the onFulfilled callback
 * immediately and ignore other callbacks.
<<<<<<< HEAD
=======
 *
 * @final
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
 */
class FulfilledPromise implements PromiseInterface
{
    private $value;

<<<<<<< HEAD
=======
    /**
     * @param mixed $value
     */
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    public function __construct($value)
    {
        if (is_object($value) && method_exists($value, 'then')) {
            throw new \InvalidArgumentException(
                'You cannot create a FulfilledPromise with a promise.'
            );
        }

        $this->value = $value;
    }

    public function then(
        callable $onFulfilled = null,
        callable $onRejected = null
<<<<<<< HEAD
    ) {
=======
    ): PromiseInterface {
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
        // Return itself if there is no onFulfilled function.
        if (!$onFulfilled) {
            return $this;
        }

        $queue = Utils::queue();
        $p = new Promise([$queue, 'run']);
        $value = $this->value;
<<<<<<< HEAD
        $queue->add(static function () use ($p, $value, $onFulfilled) {
=======
        $queue->add(static function () use ($p, $value, $onFulfilled): void {
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
            if (Is::pending($p)) {
                try {
                    $p->resolve($onFulfilled($value));
                } catch (\Throwable $e) {
                    $p->reject($e);
<<<<<<< HEAD
                } catch (\Exception $e) {
                    $p->reject($e);
=======
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
                }
            }
        });

        return $p;
    }

<<<<<<< HEAD
    public function otherwise(callable $onRejected)
=======
    public function otherwise(callable $onRejected): PromiseInterface
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    {
        return $this->then(null, $onRejected);
    }

<<<<<<< HEAD
    public function wait($unwrap = true, $defaultDelivery = null)
=======
    public function wait(bool $unwrap = true)
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    {
        return $unwrap ? $this->value : null;
    }

<<<<<<< HEAD
    public function getState()
=======
    public function getState(): string
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    {
        return self::FULFILLED;
    }

<<<<<<< HEAD
    public function resolve($value)
    {
        if ($value !== $this->value) {
            throw new \LogicException("Cannot resolve a fulfilled promise");
        }
    }

    public function reject($reason)
    {
        throw new \LogicException("Cannot reject a fulfilled promise");
    }

    public function cancel()
=======
    public function resolve($value): void
    {
        if ($value !== $this->value) {
            throw new \LogicException('Cannot resolve a fulfilled promise');
        }
    }

    public function reject($reason): void
    {
        throw new \LogicException('Cannot reject a fulfilled promise');
    }

    public function cancel(): void
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    {
        // pass
    }
}
