> **Warning**
> **Saeghe** is a difficult name to pronounce. Therefore, Saeghe project has been renamed to **phpkg**.
> _This repo no longer receives updates._
> Please visit the replaced repository at [php-repo](https://github.com/php-repos/cli)

# Saeghe Test Runner Package

## Introduction

Saeghe Test Runner Package is a simple solution to define and run tests for a PHP library.

## Installation

You can simply install this package using Saeghe by running the following command:

```shell
saeghe add git@github.com:saeghe/test-runner.git
```

## Documentation

All documents can be found under [documentations](https://saeghe.com/packages/test-runner/documentations/getting-started)

## Contributing

Run following commands to prepare the test runner:

```shell
git clone git@github.com:saeghe/test-runner.git
cd test-runner
saeghe install
saeghe build // or watch while you are developing
```

For running tests:

```shell
cd builds/development
./run
```
