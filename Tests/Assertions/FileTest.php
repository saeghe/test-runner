<?php

namespace Tests\Assertions;

use Saeghe\TestRunner\Assertions\File;
use function Saeghe\TestRunner\Assertions\Boolean\assert_true;

test(
    title: 'it should check if file exists',
    case: function () {
        File\assert_file_exists(__FILE__, 'If you see this message, it means assert_file_exists is not working properly!');

        try {
            File\assert_file_exists(__DIR__ .'/ThisFileIsNotExists.txt', 'assert_file_exists is not working properly!');
            assert_true(false, 'assert_file_exists is not working properly!');
        } catch (\AssertionError $exception) {
            assert_true('assert_file_exists is not working properly!' === $exception->getMessage(), 'assert_file_exists message is not working');
        }
    }
);

test(
    title: 'it should use a default message for assert_file_exists error',
    case: function () {
        try {
            File\assert_file_exists(__DIR__ .'/ThisFileIsNotExists.txt');
            assert_true(false, 'assert_file_exists is not working properly!');
        } catch (\AssertionError $exception) {
            assert_true('File ' . __DIR__ .'/ThisFileIsNotExists.txt ' . 'does not exists.' === $exception->getMessage(), 'assert_file_exists message is not working');
        }
    }
);

test(
    title: 'it should check content of the file',
    case: function ($file, $content) {
        File\assert_file_content($file, $content, 'If you see this message, it seems assert_file_content is not working properly!');

        try {
            File\assert_file_content($file, $content . 'addition', 'File has some additions!');
            assert_true(false, 'assert_file_content is not working properly!');
        } catch (\AssertionError $exception) {
            assert_true('File has some additions!' === $exception->getMessage(), 'assert_file_content message is not working');
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

test(
    title: 'it should use a default message for assert_file_content',
    case: function ($file, $content) {
        try {
            File\assert_file_content($file, $content . 'addition');
            assert_true(false, 'assert_file_content is not working properly!');
        } catch (\AssertionError $exception) {
            assert_true('Content of the ' . $file . ' is not equal to ' . $content . 'addition' === $exception->getMessage(), 'assert_file_content message is not working');
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
