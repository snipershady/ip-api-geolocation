<?php

namespace IPApiGeolocationWrapper\Entity;

use JsonException;
use RuntimeException;
use Serializable;

/**
 * Description of IpInfo
 *
 * @author Stefano Perrini <perrini.stefano@gmail.com> aka La Matrigna
 */
final class IpInfo {

    /**
     * 
     * @var string
     * @example <p>success or fail</p>
     */
    private string $status;

    /**
     * <p>Included only when status is fail
     * Can be one of the following: private range, reserved range, invalid query</p>
     * @var string
     * @example <p>invalid query</p>
     */
    private string $message;

    /**
     * <p>Continent name</p>
     * @var string
     * @example <p>North America</p>
     */
    private string $continent;

    /**
     * <p>Two-letter continent code</p>
     * @var string
     * @example <p>NA</p>
     */
    private string $continentCode;

    /**
     * <p>Country name</p>
     * @var string
     * @example <p>United States</p>
     */
    private string $country;

    /**
     * <p>Two-letter country code ISO 3166-1 alpha-2</p>
     * @var string
     * @example <p>US</p>
     */
    private string $countryCode;

    /**
     * <p>Region/state short code (FIPS or ISO)</p>
     * @var string
     * @example <p>CA or 10</p>
     */
    private string $region;

    /**
     * <p>Region/state</p>
     * @var string
     * @example California
     */
    private string $regionName;

    /**
     * <p>City</p>
     * @var string
     * @example <p>Mountain View</p>
     */
    private string $city;

    /**
     * <p>District (subdivision of city)</p>
     * @var string
     * @example <p>Old Farm District</p>
     */
    private string $district;

    /**
     * <p>Zip code</p>
     * @var string
     * @example <p>94043</p>
     */
    private string $zip;

    /**
     * <p>Latitude</p>
     * @var float
     * @example <p>37.4192</p>
     */
    private float $latititude;

    /**
     * <p>Longitude</p>
     * @var float
     * @example <p>-122.0574</p>
     */
    private float $longitude;

    /**
     * <p>Timezone (tz)</p>
     * @var string
     * @example <p>America/Los_Angeles</p>
     */
    private string $timezone;

    /**
     * <p>Timezone UTC DST offset in seconds</p>
     * @var int
     * @example <p>-25200</p>
     */
    private int $offset;

    /**
     * <p>National Currency</p>
     * @var string
     * @example <p>USD</p>
     */
    private string $currency;

    /**
     * <p>ISP name</p>
     * @var string
     * @example Google LLC
     */
    private string $isp;

    /**
     * <p>Organization name</p>
     * @var string
     * @example Google LLC
     */
    private string $organizationName;

    /**
     * <p>AS number and organization, separated by space (RIR). Empty for IP blocks not being announced in BGP tables.</p>
     * @var string
     * @example AS15169 Google LLC
     */
    private string $as;

    /**
     * <p>AS name (RIR). Empty for IP blocks not being announced in BGP tables.</p>
     * @var string
     * @example GOOGLE
     */
    private string $asname;

    /**
     * <p>Reverse DNS of the IP (can delay response)</p>
     * @var string
     * @example wi-in-f94.1e100.net
     */
    private string $reverse;

    /**
     * <p>Mobile (cellular) connection</p>
     * @var bool
     */
    private bool $mobile;

    /**
     * <p>Proxy, VPN or Tor exit address</p>
     * @var bool
     */
    private bool $proxy;

    /**
     * <p>Hosting, colocated or data center</p>
     * @var bool
     */
    private bool $hosting;

    /**
     * <p>IP used for the query</p>
     * @var string
     * @example 173.194.67.94
     */
    private string $query;

    public function getStatus(): string {
        return $this->status;
    }

    public function getMessage(): string {
        return $this->message;
    }

    public function getContinent(): string {
        return $this->continent;
    }

    public function getContinentCode(): string {
        return $this->continentCode;
    }

    public function getCountry(): string {
        return $this->country;
    }

    public function getCountryCode(): string {
        return $this->countryCode;
    }

    public function getRegion(): string {
        return $this->region;
    }

    public function getRegionName(): string {
        return $this->regionName;
    }

    public function getCity(): string {
        return $this->city;
    }

    public function getDistrict(): string {
        return $this->district;
    }

    public function getZip(): string {
        return $this->zip;
    }

    public function getLatititude(): float {
        return $this->latititude;
    }

    public function getLongitude(): float {
        return $this->longitude;
    }

    public function getTimezone(): string {
        return $this->timezone;
    }

    public function getOffset(): int {
        return $this->offset;
    }

    public function getCurrency(): string {
        return $this->currency;
    }

    public function getIsp(): string {
        return $this->isp;
    }

    public function getOrganizationName(): string {
        return $this->organizationName;
    }

    public function getAs(): string {
        return $this->as;
    }

    public function getAsname(): string {
        return $this->asname;
    }

    public function getReverse(): string {
        return $this->reverse;
    }

    public function getMobile(): bool {
        return $this->mobile;
    }

    public function isMobile(): bool {
        return $this->getMobile();
    }

    public function getProxy(): bool {
        return $this->proxy;
    }

    public function isProxy(): bool {
        return $this->getProxy();
    }

    public function getHosting(): bool {
        return $this->hosting;
    }

    public function isHosting(): bool {
        return $this->getHosting();
    }

    public function getQuery(): string {
        return $this->query;
    }

    public function setStatus(string $status): self {
        $this->status = $status;
        return $this;
    }

    public function setMessage(string $message): self {
        $this->message = $message;
        return $this;
    }

    public function setContinent(string $continent): self {
        $this->continent = $continent;
        return $this;
    }

    public function setContinentCode(string $continentCode): self {
        $this->continentCode = $continentCode;
        return $this;
    }

    public function setCountry(string $country): self {
        $this->country = $country;
        return $this;
    }

    public function setCountryCode(string $countryCode): self {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function setRegion(string $region): self {
        $this->region = $region;
        return $this;
    }

    public function setRegionName(string $regionName): self {
        $this->regionName = $regionName;
        return $this;
    }

    public function setCity(string $city): self {
        $this->city = $city;
        return $this;
    }

    public function setDistrict(string $district): self {
        $this->district = $district;
        return $this;
    }

    public function setZip(string $zip): self {
        $this->zip = $zip;
        return $this;
    }

    public function setLatititude(float $latititude): self {
        $this->latititude = $latititude;
        return $this;
    }

    public function setLongitude(float $longitude): self {
        $this->longitude = $longitude;
        return $this;
    }

    public function setTimezone(string $timezone): self {
        $this->timezone = $timezone;
        return $this;
    }

    public function setOffset(int $offset): self {
        $this->offset = $offset;
        return $this;
    }

    public function setCurrency(string $currency): self {
        $this->currency = $currency;
        return $this;
    }

    public function setIsp(string $isp): self {
        $this->isp = $isp;
        return $this;
    }

    public function setOrganizationName(string $organizationName): self {
        $this->organizationName = $organizationName;
        return $this;
    }

    public function setAs(string $as): self {
        $this->as = $as;
        return $this;
    }

    public function setAsname(string $asname): self {
        $this->asname = $asname;
        return $this;
    }

    public function setReverse(string $reverse): self {
        $this->reverse = $reverse;
        return $this;
    }

    public function setMobile(bool $mobile): self {
        $this->mobile = $mobile;
        return $this;
    }

    public function setProxy(bool $proxy): self {
        $this->proxy = $proxy;
        return $this;
    }

    public function setHosting(bool $hosting): self {
        $this->hosting = $hosting;
        return $this;
    }

    public function setQuery(string $query): self {
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
     * @throws RuntimeException|JsonException
     */
    public function unserialize(string $data): void {

        $element = json_decode($data, true, JSON_THROW_ON_ERROR | JSON_NUMERIC_CHECK);
        
        $this
                ->setStatus($element["status"]);
        if ($this->status === "fail") {
            $this->setMessage($element["message"]);
            throw new RuntimeException("FAIL: ip-api.com returns a status of failure for this requests. " . $this->message);
        }
        $this
                ->setContinent($element["continent"])
                ->setContinentCode($element["continentCode"])
                ->setCountry($element["country"])
                ->setCountryCode($element["countryCode"])
                ->setRegion($element["region"])
                ->setRegionName($element["regionName"])
                ->setCity($element["city"])
                ->setDistrict($element["district"])
                ->setZip($element["zip"])
                ->setLatititude($element["lat"])
                ->setLongitude($element["lon"])
                ->setTimezone($element["timezone"])
                ->setOffset($element["offset"])
                ->setCurrency($element["currency"])
                ->setIsp($element["isp"])
                ->setOrganizationName($element["org"])
                ->setAs($element["as"])
                ->setAsname($element["asname"])
                ->setReverse($element["reverse"])
                ->setMobile($element["mobile"])
                ->setProxy($element["proxy"])
                ->setHosting($element["hosting"])
                ->setQuery($element["query"])
        ;
    }

}
