<?php

class Foo
{
    /**
     * Tell Foo class Name
     * @param string $name
     * @return string
     */
    public function tellName(string $name = 'Josh'): string
    {
        return 'Hi ' . $name;
    }
}