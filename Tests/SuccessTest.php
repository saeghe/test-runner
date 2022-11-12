<?php

namespace Tests\SuccessTest;

use function Saeghe\TestRunner\Assertions\Boolean\assert_true;

test(
    title: 'it should pass the test case',
    case: function () {
        assert_true(true, 'If you see this message, it means test runner is not working as expected!');
    },
);
