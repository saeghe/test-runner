<?php

namespace Saeghe\TestRunner\Assertions\File;

function assertExists($path, $message = null)
{
    return assert(file_exists($path), $message);
}

function assertContent($path, $content, $message = null)
{
    return assert($content === file_get_contents($path), $message);
}
