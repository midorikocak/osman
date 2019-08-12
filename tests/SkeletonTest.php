<?php

declare(strict_types=1);

namespace midorikocak\osman;

class SkeletonTest extends \PHPUnit\Framework\TestCase
{

    private $osman;

    public function setUp(): void
    {
        $this->osman = new SkeletonClass();
        parent::setUp();
    }

    /**
     * Test that true does in fact equal true
     */
    public function testTrueIsTrue(): void
    {
        $this->assertTrue(true);
    }
}
