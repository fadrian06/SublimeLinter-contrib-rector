SublimeLinter-contrib-rector
================================

[![Build
Status](https://travis-ci.org/SublimeLinter/SublimeLinter-contrib-rector.svg?branch=master)](https://travis-ci.org/SublimeLinter/SublimeLinter-contrib-rector)

This linter plugin for [SublimeLinter](https://github.com/SublimeLinter/SublimeLinter) provides an interface to
[rector](https://getrector.com/). It will be used with files that have the “php” syntax.

## Installation
SublimeLinter must be installed in order to use this plugin.

Please use [Package Control](https://packagecontrol.io) to install the linter plugin.

Before installing this plugin, you must ensure that `rector` is installed on your system, or in your project's
`vendor/bin` directory. To install `rector`, do the following:

1. Install [PHP](http://php.net) (7.1 or later).
2. Install [Composer](https://getcomposer.org/download/).
3. Install `rector` by typing the following in a terminal:
```
composer global require rector/rector
```
4. or install `rector` in your project's `vendor` directory by typing the following in a terminal:
```
composer require rector/rector --dev
```

In order for `rector` to be executed by SublimeLinter, you must ensure that its path is available to SublimeLinter. The
docs cover [troubleshooting PATH
configuration](http://sublimelinter.readthedocs.io/en/latest/troubleshooting.html#finding-a-linter-executable).

## Settings
- SublimeLinter settings: http://sublimelinter.readthedocs.org/en/latest/settings.html
- Linter settings: http://sublimelinter.readthedocs.org/en/latest/linter_settings.html
