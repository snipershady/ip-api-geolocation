<?php

namespace IPApiGeolocationWrapper\Tests;

use IPApiGeolocationWrapper\Entity\IpInfo;
use IPApiGeolocationWrapper\Repository\IpInfoRepositoryAPI;
use IPApiGeolocationWrapper\Service\EffectivePrimitiveTypeRetrieverService;

/*
 * Copyright (C) 2022 Stefano Perrini <perrini.stefano@gmail.com> aka La Matrigna
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Description of EffectivePrimitiveTypeTest
 * @example ./vendor/phpunit/phpunit/phpunit --verbose tests/EffectivePrimitiveTypeTest.php 
 *
 * @author Stefano Perrini <perrini.stefano@gmail.com> aka La Matrigna
 */
class EffectivePrimitiveTypeTest extends AbstractTestCase {

    public function testPositiveInt(): void {
        $value = 1;
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsInt($result);
    }

    public function testNegativeInt(): void {
        $value = -1;
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsInt($result);
    }

    public function testZeroInt(): void {
        $value = 0;
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsInt($result);
    }

    public function testBoolTrue(): void {
        $value = true;
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsBool($result);
    }

    public function testBoolFalse(): void {
        $value = false;
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsBool($result);
    }

    public function testBoolTrueCondition(): void {
        $value = 1 === 1;
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsBool($result);
    }

    public function testPositiveFloat(): void {
        $value = 1.1;
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsFloat($result);
    }

    public function testNegativeFloat(): void {
        $value = -1.1;
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsFloat($result);
    }

    public function testZeroFloat(): void {
        $value = 0.0;
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsFloat($result);
    }

    public function testEmptyString(): void {
        $value = "";
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsString($result);
    }

    public function testString(): void {
        $value = "snipershady";
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsString($result);
    }

    public function testStringWithIntegerPrefix(): void {
        $int = 1;
        $value = $int . "snipershady";
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsString($result);
    }

    public function testStringWithIntegerSuffix(): void {
        $int = 1;
        $value = "snipershady" . $int;
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertIsString($result);
    }

    public function testNullValue(): void {
        $value = null;
        $ept = new EffectivePrimitiveTypeRetrieverService();
        $result = $ept->returnStrictType($value);

        $this->assertNull($result);
    }

}
