# ip-api-geolocation
Free wrapper to easily implements ip-api.com free API

```php
use IPApiGeolocationWrapper\Service\IpInfoRetriever;


class fooClass(){
    public function getIpInfo(): \IPApiGeolocationWrapper\Entity\IpInfo{
          $ipInfoRetriever = new \IPApiGeolocationWrapper\Service\IpInfoRetriever();
          $ip = "8.8.8.8";
          return $ipInfoRetriever->findInfoByIp($ip);
    }
}

```

## Return Type


```php
IPApiGeolocationWrapper\Entity\IpInfo {#1139 ▼
  -status: "success"
  -continent: "North America"
  -continentCode: "NA"
  -country: "United States"
  -countryCode: "US"
  -region: "VA"
  -regionName: "Virginia"
  -city: "Ashburn"
  -district: ""
  -zip: "20149"
  -latititude: 39.03
  -longitude: -77.5
  -timezone: "America/New_York"
  -offset: -14400
  -currency: "USD"
  -isp: "Google LLC"
  -organizationName: "Google Public DNS"
  -as: "AS15169 Google LLC"
  -asname: "GOOGLE"
  -reverse: "dns.google"
  -mobile: false
  -proxy: false
  -hosting: true
  -query: "8.8.8.8"
}
```