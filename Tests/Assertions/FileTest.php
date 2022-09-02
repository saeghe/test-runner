<?php

namespace Tests\Assertions;

use Saeghe\TestRunner\Assertions\File;

test(
    title: 'it should check if file exists',
    case: function () {
        File\assertExists(__FILE__, 'If you see this message, it means assertExists is not working properly!');
        File\assertExists(__DIR__ .'/ThisFileIsNotExists.txt', 'If you see this message, it means assertExists is working properly.');
    }
);

test(
    title: 'it should check content of the file',
    case: function ($file, $content) {
        File\assertContent($file, $content, 'If you see this message, it seems assertContent is not working properly!');
        File\assertContent($file, $content . 'addition', 'If you see this message, it seems assertContent is working properly.');

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
        shell_exec('rm -f ' . $file);
    }
);
