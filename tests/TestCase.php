<?php

namespace ProseMirrorToHtml\Test;

use League\CLImate\CLImate;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function outputJson($data)
    {
        $climate = new CLImate;
        $climate->json($data);
        die();
    }
}
