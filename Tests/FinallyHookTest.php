<?php

namespace Tests\FinallyHookTest;

use function Saeghe\Cli\IO\Write\success;

test(
    title: 'it should call finally hook for success',
    case: function () {
        assert(true);
    },
    finally: function () {
        success('if you see this message, the finally hook is working.');
    }
);
