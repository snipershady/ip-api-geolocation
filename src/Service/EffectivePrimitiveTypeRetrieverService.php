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
 * Description of EffectivePrimitiveTypeRetrieverService
 *
 * @author Stefano Perrini <perrini.stefano@gmail.com> aka La Matrigna
 */
final class EffectivePrimitiveTypeRetrieverService {

    public function __construct() {
        
    }

    /**
     * <p>Returns strict effective primitive type of a variable</p>
     * @param mixed $data
     * @return bool|int|float|string|null
     */
    public function returnStrictType($data): bool|int|float|string|null {
        if ($data === null) {
            return null;
        }

        if (is_bool($data)) {
            return $this->getSanitizedBool((bool) $data);
        }
        if (is_numeric($data)) {
            return $this->getSanitizedNumber($data);
        }
        if (is_string($data)) {
            return $this->getSanitizedString((string) $data);
        }
        return null;
    }

    /**
     * Return sanitized bool
     * @param bool $value
     * @return bool
     */
    private function getSanitizedBool($value): bool {

        return (bool) filter_var($value, FILTER_VALIDATE_BOOL);
    }

    /**
     * Return sanitized number
     * @param mixed $value
     *        must be "numeric"
     * @return int|float
     */
    private function getSanitizedNumber($value): int|float {
        $numericvalue = $value + 0;
        if (is_int($numericvalue)) {
            return $this->getSanitizedIntValue((int) $numericvalue);
        } else {
            return $this->getSanitizedFloatValue((float) $numericvalue);
        }
    }

    /**
     * Return sanitized string
     * @param int $value
     * @return int
     */
    private function getSanitizedIntValue(int $value): int {
        return (int) filter_var($value, FILTER_SANITIZE_NUMBER_INT);
    }

    /**
     * Return sanitized string 
     * @param float $value
     * @return float
     */
    private function getSanitizedFloatValue(float $value): float {
        return (float) filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

    /**
     * Return sanitized string 
     * @param string $value
     * @return string
     */
    private function getSanitizedString(string $value): string {
        return (string) trim(filter_var($value, FILTER_UNSAFE_RAW, FILTER_NULL_ON_FAILURE));
    }

}
