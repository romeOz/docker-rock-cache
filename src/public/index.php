<?php

use rock\cache\Memcached;
use rock\cache\CacheInterface;
use League\Flysystem\Adapter\Local;
use rock\cache\CacheFile;
use rock\file\FileManager;

if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    die('need to use PHP version 5.4.x or greater');
}

require(dirname(__DIR__) . '/vendor/autoload.php');

/* Memcached storage */

$config = [
    'servers' => [[$_SERVER['MEMCACHED_PORT_11211_TCP_ADDR'], $_SERVER['MEMCACHED_PORT_11211_TCP_PORT']]],
    'hashKey' => CacheInterface::HASH_MD5, // Default: HASH_MD5
    'serializer' => CacheInterface::SERIALIZE_JSON // Default: SERIALIZE_PHP - php serializator
];
$memcached = new Memcached($config);

$tags = ['tag_1', 'tag_2'];
$value = ['foo', 'bar'];
$expire = 0; // If use expire "0", then time to live infinitely
$memcached->set('key_1', $value, $expire, $tags);

// automatic unserialization
$result_1 = $memcached->get('key_1'); // result: ['foo', 'bar'];

$memcached->flush(); // Invalidate all items in the cache



/* Local storage */

$adapterConfig = [
    'adapter' => new Local(__DIR__.'/runtime'),
];
$adapter = new FileManager($adapterConfig);

$config = [
    'adapter' => $adapter,
    'hashKey' => CacheInterface::HASH_MD5,
    'serializer' => CacheInterface::SERIALIZE_JSON
];
$cacheFile = new CacheFile($config);

$cacheFile->set('key_1', 'foo');

$result_2 = $cacheFile->get('key_1'); // result: foo;

$cacheFile->flush(); // Invalidate all items in the cache
?>

<!DOCTYPE html>
<html>
<head>
    <title>Demo Rock Cache</title>
    <link href="/assets/css/demo.min.css" rel="stylesheet">
</head>
<body>
<main class="container main" role="main">
    <header class="header">
        <h1 class="title">Demo Rock Cache</h1>
        <p class="lead description">The example cache.</p>
    </header>
    <div class="main">
        <header class="post-title">
            Memcached storage
        </header>
        <pre><code class="php"><!--
-->use rock\cache\Memcached;
use rock\cache\CacheInterface;

$config = [
    'hashKey' => CacheInterface::HASH_MD5, // Default: HASH_MD5
    'serializer' => CacheInterface::SERIALIZE_JSON // Default: SERIALIZE_PHP - php serializator
];
$memcached = new Memcached($config);

$tags = ['tag_1', 'tag_2'];
$value = ['foo', 'bar'];
$expire = 0; // If use expire "0", then time to live infinitely
$memcached->set('key_1', $value, $expire, $tags);

// automatic unserialization
var_export($memcached->get('key_1')); // result: ['foo', 'bar'];<!--
--></code></pre>
        Result:
        <pre><code class="html"><?=var_export($result_1)?></code></pre>



        <header class="post-title">
            Local storage
        </header>
        <pre><code class="php"><!--
-->use rock\cache\CacheInterface;
use League\Flysystem\Adapter\Local;
use rock\cache\filemanager\FileManager;
use rock\cache\CacheFile;

$adapterConfig = [
    'adapter' => new Local(__DIR__.'/runtime'),
];
$adapter = new FileManager($adapterConfig);

$config = [
    'adapter' => $adapter,
    'hashKey' => CacheInterface::HASH_MD5,
    'serializer' => CacheInterface::SERIALIZE_JSON
];
$cacheFile = new CacheFile($config);

$cacheFile->set('key_1', 'foo');

var_export($cacheFile->get('key_1')); // result: foo;<!--
--></code></pre>
        Result:
        <pre><code class="html"><?=var_export($result_2)?></code></pre>
    </div>
</main>
<footer class="footer">
    <p>Demo template built on <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://github.com/romeOz">@romeo</a>.</p>
    <p><a href="#">Back to top</a></p>
</footer>
<script src="/assets/js/demo.min.js"></script>
</body>
</html>