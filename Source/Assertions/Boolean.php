<?php

namespace Saeghe\TestRunner\Assertions\Boolean;

function assert_false(bool $actual, string $message = null): bool
{
    return assert_true(! $actual, $message);
}

function assert_true(bool $actual, string $message = null): bool
{
    return assert(true === $actual, $message);
}
