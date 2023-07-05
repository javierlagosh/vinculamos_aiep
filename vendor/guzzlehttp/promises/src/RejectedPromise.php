<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
namespace GuzzleHttp\Promise;

/**
 * A promise that has been rejected.
 *
 * Thenning off of this promise will invoke the onRejected callback
 * immediately and ignore other callbacks.
<<<<<<< HEAD
=======
 *
 * @final
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
 */
class RejectedPromise implements PromiseInterface
{
    private $reason;

<<<<<<< HEAD
=======
    /**
     * @param mixed $reason
     */
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    public function __construct($reason)
    {
        if (is_object($reason) && method_exists($reason, 'then')) {
            throw new \InvalidArgumentException(
                'You cannot create a RejectedPromise with a promise.'
            );
        }

        $this->reason = $reason;
    }

    public function then(
        callable $onFulfilled = null,
        callable $onRejected = null
<<<<<<< HEAD
    ) {
=======
    ): PromiseInterface {
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
        // If there's no onRejected callback then just return self.
        if (!$onRejected) {
            return $this;
        }

        $queue = Utils::queue();
        $reason = $this->reason;
        $p = new Promise([$queue, 'run']);
<<<<<<< HEAD
        $queue->add(static function () use ($p, $reason, $onRejected) {
=======
        $queue->add(static function () use ($p, $reason, $onRejected): void {
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
            if (Is::pending($p)) {
                try {
                    // Return a resolved promise if onRejected does not throw.
                    $p->resolve($onRejected($reason));
                } catch (\Throwable $e) {
                    // onRejected threw, so return a rejected promise.
                    $p->reject($e);
<<<<<<< HEAD
                } catch (\Exception $e) {
                    // onRejected threw, so return a rejected promise.
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
        if ($unwrap) {
            throw Create::exceptionFor($this->reason);
        }

        return null;
    }

<<<<<<< HEAD
    public function getState()
=======
    public function getState(): string
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    {
        return self::REJECTED;
    }

<<<<<<< HEAD
    public function resolve($value)
    {
        throw new \LogicException("Cannot resolve a rejected promise");
    }

    public function reject($reason)
    {
        if ($reason !== $this->reason) {
            throw new \LogicException("Cannot reject a rejected promise");
        }
    }

    public function cancel()
=======
    public function resolve($value): void
    {
        throw new \LogicException('Cannot resolve a rejected promise');
    }

    public function reject($reason): void
    {
        if ($reason !== $this->reason) {
            throw new \LogicException('Cannot reject a rejected promise');
        }
    }

    public function cancel(): void
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
    {
        // pass
    }
}
