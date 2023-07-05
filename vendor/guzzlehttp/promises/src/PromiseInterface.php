<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
namespace GuzzleHttp\Promise;

/**
 * A promise represents the eventual result of an asynchronous operation.
 *
 * The primary way of interacting with a promise is through its then method,
 * which registers callbacks to receive either a promise’s eventual value or
 * the reason why the promise cannot be fulfilled.
 *
<<<<<<< HEAD
 * @link https://promisesaplus.com/
 */
interface PromiseInterface
{
    const PENDING = 'pending';
    const FULFILLED = 'fulfilled';
    const REJECTED = 'rejected';
=======
 * @see https://promisesaplus.com/
 */
interface PromiseInterface
{
    public const PENDING = 'pending';
    public const FULFILLED = 'fulfilled';
    public const REJECTED = 'rejected';
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

    /**
     * Appends fulfillment and rejection handlers to the promise, and returns
     * a new promise resolving to the return value of the called handler.
     *
     * @param callable $onFulfilled Invoked when the promise fulfills.
     * @param callable $onRejected  Invoked when the promise is rejected.
<<<<<<< HEAD
     *
     * @return PromiseInterface
=======
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     */
    public function then(
        callable $onFulfilled = null,
        callable $onRejected = null
<<<<<<< HEAD
    );
=======
    ): PromiseInterface;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

    /**
     * Appends a rejection handler callback to the promise, and returns a new
     * promise resolving to the return value of the callback if it is called,
     * or to its original fulfillment value if the promise is instead
     * fulfilled.
     *
     * @param callable $onRejected Invoked when the promise is rejected.
<<<<<<< HEAD
     *
     * @return PromiseInterface
     */
    public function otherwise(callable $onRejected);
=======
     */
    public function otherwise(callable $onRejected): PromiseInterface;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

    /**
     * Get the state of the promise ("pending", "rejected", or "fulfilled").
     *
     * The three states can be checked against the constants defined on
     * PromiseInterface: PENDING, FULFILLED, and REJECTED.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getState();
=======
     */
    public function getState(): string;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

    /**
     * Resolve the promise with the given value.
     *
     * @param mixed $value
     *
     * @throws \RuntimeException if the promise is already resolved.
     */
<<<<<<< HEAD
    public function resolve($value);
=======
    public function resolve($value): void;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

    /**
     * Reject the promise with the given reason.
     *
     * @param mixed $reason
     *
     * @throws \RuntimeException if the promise is already resolved.
     */
<<<<<<< HEAD
    public function reject($reason);
=======
    public function reject($reason): void;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

    /**
     * Cancels the promise if possible.
     *
<<<<<<< HEAD
     * @link https://github.com/promises-aplus/cancellation-spec/issues/7
     */
    public function cancel();
=======
     * @see https://github.com/promises-aplus/cancellation-spec/issues/7
     */
    public function cancel(): void;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

    /**
     * Waits until the promise completes if possible.
     *
     * Pass $unwrap as true to unwrap the result of the promise, either
     * returning the resolved value or throwing the rejected exception.
     *
     * If the promise cannot be waited on, then the promise will be rejected.
     *
<<<<<<< HEAD
     * @param bool $unwrap
     *
=======
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     * @return mixed
     *
     * @throws \LogicException if the promise has no wait function or if the
     *                         promise does not settle after waiting.
     */
<<<<<<< HEAD
    public function wait($unwrap = true);
=======
    public function wait(bool $unwrap = true);
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
}
