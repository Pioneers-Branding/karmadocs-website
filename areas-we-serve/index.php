<?php
/**
 * Directory entry point for /areas-we-serve/.
 *
 * A directory named areas-we-serve/ exists (it holds the 29 location pages), so
 * every rewrite rule gated on !-d skips a request for /areas-we-serve/ and Apache
 * falls through to DirectoryIndex. This file is what DirectoryIndex serves, which
 * means the listing page works without depending on any rewrite rule.
 */
require __DIR__ . '/../areas-we-serve.php';
