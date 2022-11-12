<?php

namespace Tests\Assertions\BooleanTest;

use function Saeghe\TestRunner\Assertions\Boolean\assert_false;
use function Saeghe\TestRunner\Assertions\Boolean\assert_true;

test(
    title: 'it should assert true',
    case: function () {
        assert(assert_true(true), 'assert true not working with true');
        try {
            assert_true(false, 'false is false not true');
            assert(false, 'assert_true for false is not working');
        } catch (\AssertionError $exception) {
            assert('false is false not true' === $exception->getMessage(), 'assert_true message is not working');
        }
    }
);

test(
    title: 'it should assert false',
    case: function () {
        assert(assert_false(false), 'assert false not working with false');
        try {
            assert_false(true, 'true is true not false');
            assert(false, 'assert_false for true is not working');
        } catch (\AssertionError $exception) {
            assert('true is true not false' === $exception->getMessage(), 'assert_false message is not working');
        }
    }
);
