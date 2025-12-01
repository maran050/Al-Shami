<?php

$maran = [

    // المصفوفات الثابتة (Superglobals)
    [
        '$GLOBAL',
        '$_SERVER',
        '$_GET',
        '$_POST',
        '$_FILES',
        '$_COOKIE',
        '$_SESSION',
        '$_REQUEST',
        '$_ENV',
    ],

    // دوال السلاسل (Strings)
    [
        'strlen', 'strpos', 'strrpos', 'substr', 'str_replace', 'str_ireplace', 'trim',
        'ltrim', 'rtrim', 'strtoupper', 'strtolower', 'ucfirst', 'lcfirst', 'ucwords',
        'explode', 'implode', 'str_split', 'strcmp', 'strcasecmp', 'str_repeat',
        'str_pad', 'addslashes', 'stripslashes', 'htmlspecialchars', 'htmlentities',
        'md5', 'sha1', 'crypt', 'wordwrap', 'chunk_split', 'strrev'
    ],

    // دوال المصفوفات (Arrays)
    [
        'array', 'array_merge', 'array_combine', 'array_diff', 'array_intersect',
        'array_keys', 'array_values', 'array_pop', 'array_push', 'array_shift',
        'array_unshift', 'array_slice', 'array_splice', 'array_search', 'in_array',
        'count', 'sort', 'rsort', 'asort', 'arsort', 'ksort', 'krsort', 'shuffle',
        'array_map', 'array_filter', 'array_reduce', 'array_unique'
    ],

    // دوال التاريخ والوقت (Date & Time)
    [
        'time', 'date', 'gmdate', 'microtime', 'strtotime', 'mktime',
        'date_create', 'date_format', 'date_modify'
    ],

    // دوال الملفات (Files)
    [
        'fopen', 'fclose', 'fread', 'fwrite', 'file', 'file_get_contents',
        'file_put_contents', 'unlink', 'copy', 'rename', 'mkdir', 'rmdir',
        'scandir', 'is_file', 'is_dir', 'filesize', 'feof', 'fgets', 'fputs'
    ],

    // دوال JSON
    [
        'json_encode', 'json_decode', 'json_last_error'
    ],

    // دوال الجلسات (Sessions)
    [
        'session_start', 'session_destroy', 'session_unset', 'session_id',
        'session_name', 'session_regenerate_id'
    ],

    // دوال الكوكيز (Cookies)
    [
        'setcookie', '$_COOKIE'
    ],

    // دوال قواعد البيانات (PDO)
    [
        'new PDO', 'prepare', 'execute', 'query', 'fetch', 'fetchAll',
        'beginTransaction', 'commit', 'rollBack', 'lastInsertId'
    ],

    // دوال الرياضيات (Math)
    [
        'abs', 'ceil', 'floor', 'round', 'rand', 'mt_rand', 'max', 'min',
        'pow', 'sqrt', 'pi', 'sin', 'cos', 'tan', 'log', 'exp'
    ],

    // دوال التحقق (Validation)
    [
        'filter_var', 'filter_input', 'is_numeric', 'is_int', 'is_string',
        'is_array', 'is_null', 'is_bool', 'empty', 'isset'
    ],

    // دوال النظام (System)
    [
        'phpinfo', 'sleep', 'exec', 'shell_exec', 'system',
        'getenv', 'putenv', 'die', 'exit'
    ],

    // دوال Regex
    [
        'preg_match', 'preg_match_all', 'preg_replace',
        'preg_split', 'preg_grep'
    ],

    // دوال التشفير والهاش
    [
        'hash', 'hash_hmac', 'password_hash', 'password_verify',
        'openssl_encrypt', 'openssl_decrypt'
    ],

    // دوال OOP (الكائنات)
    [
        '__construct', '__destruct', '__get', '__set', '__call',
        '__callStatic', '__invoke', '__toString', '__clone', '__debugInfo'
    ],

    // SPL (Standard PHP Library)
    [
        'SplStack', 'SplQueue', 'SplDoublyLinkedList', 'SplHeap', 'SplMaxHeap',
        'SplMinHeap', 'SplFileObject', 'SplObserver', 'SplSubject',
        'ArrayObject', 'Iterator', 'IteratorAggregate'
    ],

];

?>
