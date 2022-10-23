<?php

namespace Tests\RunTest;

test(
    title: 'it should run tests in given directory',
    case: function () {
        exec($_SERVER['PWD'] . '/run --directory=OtherTestDirectory', $output);

        assert(str_contains($output[0], "✅ it should pass the test case"));
        assert(3 === count($output));
    },
);
