<?php

namespace IPApiGeolocationWrapper\Entity;

use RuntimeException;

/**
 * Description of IpInfo
 *
 * @author Stefano Perrini <perrini.stefano@gmail.com> aka La Matrigna
 */
final class IpInfo {

    /**
     * 
     * @var ?string
     * @example <p>success or fail</p>
     */
    private ?string $status = null;

    /**
     * <p>Included only when status is fail
     * Can be one of the following: private range, reserved range, invalid query</p>
     * @var ?string
     * @example <p>invalid query</p>
     */
    private ?string $message = null;

    /**
     * <p>Continent name</p>
     * @var ?string
     * @example <p>North America</p>
     */
    private ?string $continent = null;

    /**
     * <p>Two-letter continent code</p>
     * @var ?string
     * @example <p>NA</p>
     */
    private ?string $continentCode = null;

    /**
     * <p>Country name</p>
     * @var ?string
     * @example <p>United States</p>
     */
    private ?string $country = null;

    /**
     * <p>Two-letter country code ISO 3166-1 alpha-2</p>
     * @var ?string
     * @example <p>US</p>
     */
    private ?string $countryCode = null;

    /**
     * <p>Region/state short code (FIPS or ISO)</p>
     * @var ?string
     * @example <p>CA or 10</p>
     */
    private ?string $region = null;

    /**
     * <p>Region/state</p>
     * @var ?string
     * @example California
     */
    private ?string $regionName = null;

    /**
     * <p>City</p>
     * @var ?string
     * @example <p>Mountain View</p>
     */
    private ?string $city = null;

    /**
     * <p>District (subdivision of city)</p>
     * @var ?string
     * @example <p>Old Farm District</p>
     */
    private ?string $district = null;

    /**
     * <p>Zip code</p>
     * @var ?string
     * @example <p>94043</p>
     */
    private ?string $zip = null;

    /**
     * <p>Latitude</p>
     * @var float
     * @example <p>37.4192</p>
     */
    private ?float $latititude = null;

    /**
     * <p>Longitude</p>
     * @var float
     * @example <p>-122.0574</p>
     */
    private ?float $longitude = null;

    /**
     * <p>Timezone (tz)</p>
     * @var ?string
     * @example <p>America/Los_Angeles</p>
     */
    private ?string $timezone = null;

    /**
     * <p>Timezone UTC DST offset in seconds</p>
     * @var int
     * @example <p>-25200</p>
     */
    private ?int $offset = null;

    /**
     * <p>National Currency</p>
     * @var ?string
     * @example <p>USD</p>
     */
    private ?string $currency = null;

    /**
     * <p>ISP name</p>
     * @var ?string
     * @example Google LLC
     */
    private ?string $isp = null;

    /**
     * <p>Organization name</p>
     * @var ?string
     * @example Google LLC
     */
    private ?string $organizationName = null;

    /**
     * <p>AS number and organization, separated by space (RIR). Empty for IP blocks not being announced in BGP tables.</p>
     * @var ?string
     * @example AS15169 Google LLC
     */
    private ?string $as = null;

    /**
     * <p>AS name (RIR). Empty for IP blocks not being announced in BGP tables.</p>
     * @var ?string
     * @example GOOGLE
     */
    private ?string $asname = null;

    /**
     * <p>Reverse DNS of the IP (can delay response)</p>
     * @var ?string
     * @example wi-in-f94.1e100.net
     */
    private ?string $reverse = null;

    /**
     * <p>Mobile (cellular) connection</p>
     * @var bool
     */
    private ?bool $mobile = null;

    /**
     * <p>Proxy, VPN or Tor exit address</p>
     * @var bool
     */
    private ?bool $proxy = null;

    /**
     * <p>Hosting, colocated or data center</p>
     * @var bool
     */
    private ?bool $hosting = null;

    /**
     * <p>IP used for the query</p>
     * @var ?string
     * @example 173.194.67.94
     */
    private ?string $query = null;

    public function getStatus(): ?string {
        return $this->status;
    }

    public function getMessage(): ?string {
        return $this->message;
    }

    public function getContinent(): ?string {
        return $this->continent;
    }

    public function getContinentCode(): ?string {
        return $this->continentCode;
    }

    public function getCountry(): ?string {
        return $this->country;
    }

    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    public function getRegion(): ?string {
        return $this->region;
    }

    public function getRegionName(): ?string {
        return $this->regionName;
    }

    public function getCity(): ?string {
        return $this->city;
    }

    public function getDistrict(): ?string {
        return $this->district;
    }

    public function getZip(): ?string {
        return $this->zip;
    }

    public function getLatititude(): ?float {
        return $this->latititude;
    }

    public function getLongitude(): ?float {
        return $this->longitude;
    }

    public function getTimezone(): ?string {
        return $this->timezone;
    }

    public function getOffset(): ?int {
        return $this->offset;
    }

    public function getCurrency(): ?string {
        return $this->currency;
    }

    public function getIsp(): ?string {
        return $this->isp;
    }

    public function getOrganizationName(): ?string {
        return $this->organizationName;
    }

    public function getAs(): ?string {
        return $this->as;
    }

    public function getAsname(): ?string {
        return $this->asname;
    }

    public function getReverse(): ?string {
        return $this->reverse;
    }

    public function getMobile(): ?bool {
        return $this->mobile;
    }

    public function isMobile(): ?bool {
        return $this->getMobile();
    }

    public function getProxy(): ?bool {
        return $this->proxy;
    }

    public function isProxy(): ?bool {
        return $this->getProxy();
    }

    public function getHosting(): ?bool {
        return $this->hosting;
    }

    public function isHosting(): ?bool {
        return $this->getHosting();
    }

    public function getQuery(): ?string {
        return $this->query;
    }

    public function setStatus(?string $status): self {
        $this->status = $status;
        return $this;
    }

    public function setMessage(?string $message): self {
        $this->message = $message;
        return $this;
    }

    public function setContinent(?string $continent): self {
        $this->continent = $continent;
        return $this;
    }

    public function setContinentCode(?string $continentCode): self {
        $this->continentCode = $continentCode;
        return $this;
    }

    public function setCountry(?string $country): self {
        $this->country = $country;
        return $this;
    }

    public function setCountryCode(?string $countryCode): self {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function setRegion(?string $region): self {
        $this->region = $region;
        return $this;
    }

    public function setRegionName(?string $regionName): self {
        $this->regionName = $regionName;
        return $this;
    }

    public function setCity(?string $city): self {
        $this->city = $city;
        return $this;
    }

    public function setDistrict(?string $district): self {
        $this->district = $district;
        return $this;
    }

    public function setZip(?string $zip): self {
        $this->zip = $zip;
        return $this;
    }

    public function setLatititude(?float $latititude): self {
        $this->latititude = $latititude;
        return $this;
    }

    public function setLongitude(?float $longitude): self {
        $this->longitude = $longitude;
        return $this;
    }

    public function setTimezone(?string $timezone): self {
        $this->timezone = $timezone;
        return $this;
    }

    public function setOffset(?int $offset): self {
        $this->offset = $offset;
        return $this;
    }

    public function setCurrency(?string $currency): self {
        $this->currency = $currency;
        return $this;
    }

    public function setIsp(?string $isp): self {
        $this->isp = $isp;
        return $this;
    }

    public function setOrganizationName(?string $organizationName): self {
        $this->organizationName = $organizationName;
        return $this;
    }

    public function setAs(?string $as): self {
        $this->as = $as;
        return $this;
    }

    public function setAsname(?string $asname): self {
        $this->asname = $asname;
        return $this;
    }

    public function setReverse(?string $reverse): self {
        $this->reverse = $reverse;
        return $this;
    }

    public function setMobile(?bool $mobile): self {
        $this->mobile = $mobile;
        return $this;
    }

    public function setProxy(?bool $proxy): self {
        $this->proxy = $proxy;
        return $this;
    }

    public function setHosting(?bool $hosting): self {
        $this->hosting = $hosting;
        return $this;
    }

    public function setQuery(?string $query): self {
        $this->query = $query;
        return $this;
    }

    /**
     * 
     * @return string|null
     */
    public function serialize(): ?string {
        if ($this->status === "fail") {
            $arrayObject = [
                "message" => $this->message,
            ];
        } else {
            $arrayObject = [
                "status" => $this->status,
                "continent" => $this->continent,
                "continentCode" => $this->continentCode,
                "country" => $this->country,
                "countryCode" => $this->countryCode,
                "region" => $this->region,
                "regionName" => $this->regionName,
                "city" => $this->city,
                "district" => $this->district,
                "zip" => $this->zip,
                "lat" => $this->latititude,
                "lon" => $this->longitude,
                "timezone" => $this->timezone,
                "offset" => $this->offset,
                "currency" => $this->currency,
                "isp" => $this->isp,
                "org" => $this->organizationName,
                "as" => $this->as,
                "asname" => $this->asname,
                "reverse" => $this->reverse,
                "mobile" => $this->mobile,
                "proxy" => $this->proxy,
                "hosting" => $this->hosting,
                "query" => $this->query
            ];
        }
        $resultString = json_encode($arrayObject, JSON_THROW_ON_ERROR | JSON_NUMERIC_CHECK);
        return !empty($resultString) ? $resultString : null;
    }

    /**
     * 
     * @param string $data
     * @return void
     * @throws \RuntimeException|\JsonException
     */
    public function unserialize(string $data): void {

        $element = json_decode($data, true, JSON_THROW_ON_ERROR | JSON_NUMERIC_CHECK);
        $ass = new \IPApiGeolocationWrapper\Service\ArraySanitizerService();
        $this
                ->setStatus($ass->getKeyFromArray("status", $element));
        if ($this->status === "fail") {
            $this->setMessage($ass->getKeyFromArray("message", $element));
            throw new RuntimeException("FAIL: ip-api.com returns a status of failure for this requests. " . $this->message);
        }
        $this
                ->setContinent($ass->getKeyFromArray("continent", $element))
                ->setContinentCode($ass->getKeyFromArray("continentCode", $element))
                ->setCountry($ass->getKeyFromArray("country", $element))
                ->setCountryCode($ass->getKeyFromArray("countryCode", $element))
                ->setRegion($ass->getKeyFromArray("region", $element))
                ->setRegionName($ass->getKeyFromArray("regionName", $element))
                ->setCity($ass->getKeyFromArray("city", $element))
                ->setDistrict($ass->getKeyFromArray("district", $element))
                ->setZip($ass->getKeyFromArray("zip", $element))
                ->setLatititude($ass->getKeyFromArray("lat", $element))
                ->setLongitude($ass->getKeyFromArray("long", $element))
                ->setTimezone($ass->getKeyFromArray("timezone", $element))
                ->setOffset($ass->getKeyFromArray("offset", $element))
                ->setCurrency($ass->getKeyFromArray("currency", $element))
                ->setIsp($ass->getKeyFromArray("isp", $element))
                ->setOrganizationName($ass->getKeyFromArray("org", $element))
                ->setAs($ass->getKeyFromArray("as", $element))
                ->setAsname($ass->getKeyFromArray("asname", $element))
                ->setReverse($ass->getKeyFromArray("reverse", $element))
                ->setMobile($ass->getKeyFromArray("mobile", $element))
                ->setProxy($ass->getKeyFromArray("proxy", $element))
                ->setHosting($ass->getKeyFromArray("hosting", $element))
                ->setQuery($ass->getKeyFromArray("query", $element))
        ;
    }

    /**
     * 
     * @param IpInfo $obj
     * @return bool
     */
    public function equals(IpInfo $obj): bool {
        if (get_class($obj) !== get_class($this)) {
            return false;
        }

        if ($obj->getAs() !== $this->as) {
            return false;
        }

        if ($obj->getAsname() !== $this->asname) {
            return false;
        }

        if ($obj->getCity() !== $this->city) {
            return false;
        }

        if ($obj->getContinent() !== $this->continent) {
            return false;
        }

        if ($obj->getContinentCode() !== $this->continentCode) {
            return false;
        }

        if ($obj->getCountry() !== $this->country) {
            return false;
        }

        if ($obj->getCountryCode() !== $this->countryCode) {
            return false;
        }

        if ($obj->getCurrency() !== $this->currency) {
            return false;
        }

        if ($obj->getDistrict() !== $this->district) {
            return false;
        }

        if ($obj->getHosting() !== $this->hosting) {
            return false;
        }

        if ($obj->getIsp() !== $this->isp) {
            return false;
        }

        if ($obj->getLatititude() !== $this->latititude) {
            return false;
        }

        if ($obj->getLongitude() !== $this->longitude) {
            return false;
        }

        if ($obj->getMessage() !== $this->message) {
            return false;
        }

        if ($obj->getMobile() !== $this->mobile) {
            return false;
        }

        if ($obj->getOffset() !== $this->offset) {
            return false;
        }

        if ($obj->getOrganizationName() !== $this->organizationName) {
            return false;
        }

        if ($obj->getProxy() !== $this->proxy) {
            return false;
        }

        if ($obj->getQuery() !== $this->query) {
            return false;
        }

        if ($obj->getRegion() !== $this->region) {
            return false;
        }

        if ($obj->getRegionName() !== $this->regionName) {
            return false;
        }

        if ($obj->getReverse() !== $this->reverse) {
            return false;
        }

        if ($obj->getStatus() !== $this->status) {
            return false;
        }

        if ($obj->getTimezone() !== $this->timezone) {
            return false;
        }

        if ($obj->getZip() !== $this->zip) {
            return false;
        }

        return true;
    }

}
