<?php

namespace Tests\FailTest;

use function Saeghe\TestRunner\Assertions\Boolean\assert_true;

test(
    title: 'it should fail the test case',
    case: function () {
        assert_true(false, 'If you see this message, it means test runner is working as expected!');
    },
);
