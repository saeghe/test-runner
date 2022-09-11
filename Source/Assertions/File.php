<?php

namespace Saeghe\TestRunner\Assertions\File;

function assert_exists($path, $message = null)
{
    return assert(file_exists($path), $message);
}

function assert_content($path, $content, $message = null)
{
    return assert($content === file_get_contents($path), $message);
}
