--TEST--
Access on NULL pointer in array_merge_deep()
--FILE--
<?php
try {
    array_merge_deep(
        ['' => [PHP_INT_MAX => null]],
        ['' => [null]],
    );
} catch (Throwable $e) {
    echo $e->getMessage(), "\n";
}
?>
--EXPECT--
Cannot add element to the array as the next element is already occupied
