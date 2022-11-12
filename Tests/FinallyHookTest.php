<?php

namespace Tests\FinallyHookTest;

use function Saeghe\Cli\IO\Write\success;
use function Saeghe\TestRunner\Assertions\Boolean\assert_true;

test(
    title: 'it should call finally hook for success',
    case: function () {
        assert_true(true);
        try {
            assert_true(false, 'failed message');
        } catch (\AssertionError $exception) {
            assert_true('failed message' === $exception->getMessage());
        }
    },
    finally: function () {
        success('if you see this message, the finally hook is working.');
    }
);
