<?php

namespace WorkingCode\ExamplePackage;

class PhpInfo
{
    public function getVersion(): string
    {
        return phpversion();
    }

    public function getExtensions(): array
    {
        return get_loaded_extensions();
    }
}
