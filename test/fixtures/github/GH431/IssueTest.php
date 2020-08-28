<?php

declare(strict_types=1);

namespace ParaTest\Tests\fixtures\github\GH431;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
class IssueTest extends TestCase
{
    public function testFillBuffers(): void
    {
        // the string is larger than the output buffer.
        // if the parent process doesnt read the output buffer, this test will hang forever.
        // run with: ../../../../bin/paratest -c . --runner=SqliteRunner
        echo str_repeat('a', 100000);
    }

}
