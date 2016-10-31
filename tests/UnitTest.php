<?php

namespace FirstPhalconTravis\Tests;

/**
 * Class UnitTest
 */
class UnitTest extends TestCase {

    public function testTestCase() {

        $this->assertEquals('works',
            'works',
            'This is OK'
        );

        $this->assertEquals('works',
            'works1',
            'This wil fail'
        );
    }
}