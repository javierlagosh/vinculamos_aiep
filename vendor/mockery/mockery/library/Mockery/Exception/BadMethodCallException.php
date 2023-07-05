<?php

namespace Mockery\Exception;

<<<<<<< HEAD
class BadMethodCallException extends \BadMethodCallException
=======
class BadMethodCallException extends \BadMethodCallException implements MockeryExceptionInterface
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
{
    private $dismissed = false;

    public function dismiss()
    {
        $this->dismissed = true;

        // we sometimes stack them
        if ($this->getPrevious() && $this->getPrevious() instanceof BadMethodCallException) {
            $this->getPrevious()->dismiss();
        }
    }

    public function dismissed()
    {
        return $this->dismissed;
    }
}
