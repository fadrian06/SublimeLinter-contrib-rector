<?php

namespace SLRector\Rules\FilesystemIteratorSkipDotsRector;

use FilesystemIterator;

new FilesystemIterator(__DIR__, FilesystemIterator::KEY_AS_FILENAME);
