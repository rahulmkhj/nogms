<?php

/**
 * @param string $path
 * @return string
 *
 * This function receives a path parameter relative to Modules directory, and
 * produces absolute path for the same. And provides absolute path upto
 * Modules directory when executed without any parameter.
 */
function modules_path(string $path = ''): string
{
    return app()->basePath("Modules" . DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR));
}
