<?php

namespace Tests\AfterHookTest;

test(
    title: 'it should run the after hook for success tests',
    case: function () {
        assert(true);

        return 'foo';
    },
    after: function ($a) {
        assert($a === 'foo', 'After hook does not work properly!');
    }
);

test(
    title: 'it should unpack array data',
    case: function () {
        assert(true);
        $a = 'foo';
        $b = 'bar';

        return compact('a', 'b');
    },
    after: function ($a, $b) {
        assert($a === 'foo' && $b === 'bar', 'After hook does not work with array unpacking!');
    }
);

test(
    title: 'it should not unpack the array when after needs array in one parameter',
    case: function () {
        assert(true);
        $a = 'foo';
        $b = 'bar';

        return compact('a', 'b');
    },
    after: function ($array) {
        assert($array['a'] === 'foo' && $array['b'] === 'bar', 'After hook does not work with array return type!');
    }
);

test(
    title: 'it should not run the after hook for failed tests',
    case: function () {
        assert(false, 'If you see me, it means everything is working fine ;)');

        $a = 'foo';
        $b = 'bar';

        return compact('a', 'b');
    },
    after: function () {
        assert(false, 'You should not be here! After hook should not run for failed tests.');
    }
);
