<?php

namespace Tests\FailTest;

test(
    title: 'it should fail the test case',
    case: function () {
        assert(false, 'If you see this message, it means test runner is working as expected!');
    },
);
