<?php

declare(strict_types=1);

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Parser;

<<<<<<< HEAD
=======
use League\CommonMark\Exception\CommonMarkException;
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
use League\CommonMark\Node\Block\Document;

interface MarkdownParserInterface
{
    /**
<<<<<<< HEAD
     * @throws \RuntimeException
=======
     * @throws CommonMarkException
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     */
    public function parse(string $input): Document;
}
