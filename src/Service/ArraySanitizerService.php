<?php

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

namespace IPApiGeolocationWrapper\Service;

/**
 * Description of ArraySanitizerService
 *
 * @author Stefano Perrini <perrini.stefano@gmail.com> aka La Matrigna
 */
class ArraySanitizerService {

    /**
     * <p>Returns value from a needle of an array, sanitized and with effective primitive strict type</p>
     * @param string $needle
     * @param array<mixed> $array
     * @return bool|int|float|string|null
     */
    public function getKeyFromArray(string $needle, array $array = []): bool|int|float|string|null {
        $eptr = new EffectivePrimitiveTypeRetrieverService();

        return is_array($array) && array_key_exists($needle, $array) ? $eptr->returnStrictType($array[$needle]) : null;
    }

}
