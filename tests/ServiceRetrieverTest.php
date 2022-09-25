<?php

namespace IPApiGeolocationWrapper\Tests;

use IPApiGeolocationWrapper\Service\IpInfoRetriever;

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
 * Description of ServiceRetrieverTest
 * @example ./vendor/phpunit/phpunit/phpunit --verbose tests/ServiceRetrieverTest.php 
 *
 * @author Stefano Perrini <perrini.stefano@gmail.com> aka La Matrigna
 */
class ServiceRetrieverTest extends AbstractTestCase {

    public function testServiceIPv4(): void {
        $ip = "173.194.67.94";
        $serviceRetriever = new IpInfoRetriever();

        $this->assertEquals($ip, $serviceRetriever->findInfoByIp($ip)->getQuery());
    }

    public function testServiceIPv6(): void {
        $ip = "2001:4860:4860::8888";
        $serviceRetriever = new IpInfoRetriever();

        $this->assertEquals($ip, $serviceRetriever->findInfoByIp($ip)->getQuery());
    }

    public function testServiceEmptyStringIp(): void {
        $ip = "";
        $serviceRetriever = new IpInfoRetriever();
        $this->assertEquals($this->getPublicIp(), $serviceRetriever->findInfoByIp($ip)->getQuery());
    }

    public function testServiceNotValidIP(): void {
        $ip = "NotValidIp";
        $serviceRetriever = new IpInfoRetriever();
        $this->expectException(\RuntimeException::class);
        $ipInfo = $serviceRetriever->findInfoByIp($ip);
        echo $ipInfo->getMessage();
        $this->assertEquals($ipInfo->getMessage(), "FAIL: ip-api.com returns a status of failure for this requests. invalid query");
    }
    
    public function testServiceLocalHost(): void {
        $ip = "127.0.0.1";
        $serviceRetriever = new IpInfoRetriever();
        $this->expectException(\RuntimeException::class);
        $ipInfo = $serviceRetriever->findInfoByIp($ip);
        echo $ipInfo->getMessage();
        $this->assertEquals($ipInfo->getMessage(), "FAIL: ip-api.com returns a status of failure for this requests. reserved range");
    }
    
    private function getPublicIp(): string {
        $match = [];
        $publicIpInformationByPublicService = file_get_contents('http://checkip.dyndns.com/');
        preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $publicIpInformationByPublicService, $match);
        return $match[1];
    }

}
