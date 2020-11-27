# laravel-mongodb-datatables

#### Server Requirements
+ MongoDB
+ PHP >= 7.2
+ Laravel 6 or greater

### Requirements
+ Mongodb Package
https://github.com/jenssegers/laravel-mongodb
+ Laravel Repository 
https://github.com/andersao/l5-repository
### Usage

Then use the `KhatriDatatable` facade for raw queries to the mongodb.

```php
return KhatriDatatable::collection($this->repository, $request, true)
            ->raw('aggregate', [
                ['$unwind' => '$cities'],
                ['$match'  => [
                    'cities.isDeleted' => false,
                ]],
                ['$project' => [
                    "country" => true,
                    "cities.cityId" => true,
                    "cities.cityName" => true,
                    "cities.state" => true,
                    "cities.currency" => true,
                    "cities.currencySymbol" => true,
                    "cities.weightMetricText" => true,
                    "cities.mileageMetric" => true,
                    "cities.paymentMethods" => true,
                    "cities.isDeleted" => true,
                ]],
            ])
            ->build();
```
