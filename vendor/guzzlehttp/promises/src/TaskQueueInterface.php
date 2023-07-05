<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
namespace GuzzleHttp\Promise;

interface TaskQueueInterface
{
    /**
     * Returns true if the queue is empty.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function isEmpty();
=======
     */
    public function isEmpty(): bool;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

    /**
     * Adds a task to the queue that will be executed the next time run is
     * called.
     */
<<<<<<< HEAD
    public function add(callable $task);
=======
    public function add(callable $task): void;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c

    /**
     * Execute all of the pending task in the queue.
     */
<<<<<<< HEAD
    public function run();
=======
    public function run(): void;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
}
