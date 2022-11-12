<?php

namespace Saeghe\TestRunner\Assertions\File;

use function Saeghe\TestRunner\Assertions\Boolean\assert_true;

function assert_file_exists(string $path, ?string $message = null): bool
{
    $message = $message ?? 'File ' . $path . ' does not exists.';

    return assert_true(file_exists($path), $message);
}

function assert_file_content(string $path, string $content, ?string $message = null): bool
{
    $message = $message ?? 'Content of the ' . $path . ' is not equal to ' . $content;

    return assert_true($content === file_get_contents($path), $message);
}
