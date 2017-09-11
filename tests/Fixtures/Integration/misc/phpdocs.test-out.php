<?php

class Foo {
    
    public $bar;

    /**
     * @var array
     */
    public $baz;

    /**
     * Foo.
     *
     * @param int   $fo  This is int
     * @param float $bar This is float
     * @param mixed $qux
     *
     * @throws Exception
     *
     *
     * @custom
     */
    public function foo ($fo, $bar, array $baz, $qux) {}
}
