<?php

namespace Saeghe\TestRunner\Assertions\File;

use function Saeghe\TestRunner\Assertions\Boolean\assert_true;

function assert_exists($path, $message = null): bool
{
    return assert_true(file_exists($path), $message);
}

function assert_content($path, $content, $message = null): bool
{
    return assert_true($content === file_get_contents($path), $message);
}
