# Laracart

This package provides a set of Eloquent ORM models for OpenCart entities.
Using this package you can access your OpenCart database tables inside Laravel.

## Installation

```
composer require exfriend/laracart
```

## Usage

```
use \Exfriend\Laracart\Models\Manufacturer;

$manufacturer = Manufacturer::create([
   'name' => 'Canon',
   'image' => 'catalog/demo/canon.jpg',
   'sort_order' => 0
]);

$manufacturer->description()->create([
   'name' => 'Canon',
   'description' => 'Better than Nikon.'
   'language_id' => 1
]);

$manufacturer->stores()->attach(0);

```

## Contributing

This package is work in progress. Please submit your pull requests with new models.
