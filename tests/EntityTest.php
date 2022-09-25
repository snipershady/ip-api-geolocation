<?php

namespace IPApiGeolocationWrapper\Tests;

use IPApiGeolocationWrapper\Entity\IpInfo;
use IPApiGeolocationWrapper\Repository\IpInfoRepositoryAPI;

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
 * Description of EntityTest
 * @example ./vendor/phpunit/phpunit/phpunit --verbose tests/EntityTest.php 
 *
 * @author Stefano Perrini <perrini.stefano@gmail.com> aka La Matrigna
 */
class EntityTest extends AbstractTestCase {

    public function testSerializationValidIp(): void {
        $ip = "173.194.67.94";
        $serviceRetrievere = new IpInfoRepositoryAPI();
        $ipInfoObject = $serviceRetrievere->findByIp($ip);
        $stringSerialized = $ipInfoObject->serialize();

        $newObject = new IpInfo();
        $newObject->unserialize($stringSerialized);

        $this->assertEquals($ipInfoObject->getQuery(), $newObject->getQuery());
        $this->assertTrue($newObject->equals($ipInfoObject));
    }

    public function testSerializationNotValidIP(): void {
        $ip = "256.194.67.94";
        $serviceRetrievere = new IpInfoRepositoryAPI();
        $this->expectException(\RuntimeException::class);
        $ipInfoObject = $serviceRetrievere->findByIp($ip);
        $message = "FAIL: ip-api.com returns a status of failure for this requests. invalid query";

        $this->assertEquals($message, $ipInfoObject->getMessage());
    }

    public function testSerializationPrivateIp(): void {
        $ip = "192.168.0.1";
        $serviceRetrievere = new IpInfoRepositoryAPI();
        $this->expectException(\RuntimeException::class);
        $ipInfoObject = $serviceRetrievere->findByIp($ip);
        $message = "FAIL: ip-api.com returns a status of failure for this requests. invalid query";

        $this->assertEquals($message, $ipInfoObject->getMessage());
    }

    public function testEqualsImplementationNoAttributesInitialization(): void {
        $ipInfo = new IpInfo();
        $ipInfoTwo = new IpInfo();
        $this->assertTrue($ipInfo->equals($ipInfoTwo));
    }

    public function testEqualsImplementation(): void {
        $ipInfo = new IpInfo();
        $ipInfo->setHosting(true)
                ->setIsp("SPinfo.it")
                ->setOffset(-1500)
                ->setLatititude(1.1);

        $ipInfoTwo = new IpInfo();
        $ipInfoTwo
                ->setHosting(true)
                ->setIsp("SPinfo.it")
                ->setOffset(-1500)
                ->setLatititude(1.1);
        $this->assertTrue($ipInfo->equals($ipInfoTwo));
    }

}
