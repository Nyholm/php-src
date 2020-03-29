--TEST--
func_get_arg on non-existent arg
--FILE--
<?php

function foo($a)
{
    try {
        var_dump(func_get_arg(2));
    } catch (\Error $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
}
foo(2, 3);

?>
--EXPECT--
func_get_arg(): Argument 2 not passed to function
