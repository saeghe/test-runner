<?php

namespace Tests\Assertions;

use Saeghe\TestRunner\Assertions\File;

test(
    title: 'it should check if file exists',
    case: function () {
        File\assert_exists(__FILE__, 'If you see this message, it means assert_exists is not working properly!');

        try {
            File\assert_exists(__DIR__ .'/ThisFileIsNotExists.txt', 'assert_exists is not working properly!');
            assert(false, 'assert_exists is not working properly!');
        } catch (\AssertionError $exception) {
            assert('assert_exists is not working properly!' === $exception->getMessage(), 'assert_exists message is not working');
        }
    }
);

test(
    title: 'it should check content of the file',
    case: function ($file, $content) {
        File\assert_content($file, $content, 'If you see this message, it seems assert_content is not working properly!');

        try {
            File\assert_content($file, $content . 'addition', 'File has some additions!');
            assert(false, 'assert_content is not working properly!');
        } catch (\AssertionError $exception) {
            assert('File has some additions!' === $exception->getMessage(), 'assert_content message is not working');
        }

        return $file;
    },
    before: function () {
        $content = 'This is a test content';
        $file = __DIR__ . '/sample-file.txt';
        file_put_contents($file, $content);

        return compact('file', 'content');
    },
    finally: function () {
        $file = __DIR__ . '/sample-file.txt';
        unlink($file);
    }
);
