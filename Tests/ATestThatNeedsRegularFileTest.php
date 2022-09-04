<?php

/**
 * This file should be before the RegularFile
 * Because we want to make sure the regular file is loaded before this file
 * Otherwise it tests nothing
 */
namespace Tests\ATestThatNeedsRegularFileTest;

use function Tests\RegularFile\returnTrue;

test('it should not break with using the other file', function () {
    assert(returnTrue());
});
