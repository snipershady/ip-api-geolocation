<?php

namespace IPApiGeolocationWrapper\Service;

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
 * Description of IpInfoRetriever
 *
 * @author Stefano Perrini <perrini.stefano@gmail.com> aka La Matrigna
 */
final class IpInfoRetriever {

    /**
     * <p>Returns IP Geolocation of caller IP address or defined IP address</p>
     * @param string $ip
     * @return type
     */
    public function findInfoByIp(string $ip) {
        $repo = new IpInfoRepositoryAPI();
        return $repo->findByIp($ip);
    }

}
