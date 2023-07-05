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

namespace Psy\VersionUpdater;

use Psy\Exception\ErrorException;

interface Downloader
{
    /**
     * Set the directory where the download will be written to.
     *
     * @param string $tempDir
     */
    public function setTempDir(string $tempDir);

    /**
     * @param string $url
     *
<<<<<<< HEAD
     * @return bool
     *
=======
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     * @throws ErrorException on failure
     */
    public function download(string $url): bool;

    /**
     * Get the temporary file name the download was written to.
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     */
    public function getFilename(): string;

    /**
     * Delete the downloaded file if it exists.
     *
     * @return void
     */
    public function cleanup();
}
