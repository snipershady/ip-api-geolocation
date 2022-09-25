<?php

namespace IPApiGeolocationWrapper\Tests;

use IPApiGeolocationWrapper\Repository\IpInfoRepositoryAPI;
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
 * Description of RepositoryTest
 * @example ./vendor/phpunit/phpunit/phpunit --verbose tests/RepositoryTest.php 
 *
 * @author Stefano Perrini <perrini.stefano@gmail.com> aka La Matrigna
 */
class RepositoryTest extends AbstractTestCase {

    public function testServiceIPv4(): void {
        $ip = "173.194.67.94";
        $repo = new IpInfoRepositoryAPI();

        $this->assertEquals($ip, $repo->findByIp($ip)->getQuery());
    }

    public function testServiceIPv6(): void {
        $ip = "2001:4860:4860::8888";
        $repo = new IpInfoRepositoryAPI();

        $this->assertEquals($ip, $repo->findByIp($ip)->getQuery());
    }

}
