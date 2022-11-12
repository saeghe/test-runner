<?php

namespace Tests\RegularFile;

use function Saeghe\TestRunner\Assertions\Boolean\assert_true;

test('it loads regular files', function () {
    assert_true(true);
});

// This function has been used in different test case
function returnTrue()
{
    return true;
}
