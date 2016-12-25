#php-timecamp-api

A [Timecamp](http://www.timecamp.com/) PHP client. Presents returned data from the [Timecamp API](https://github.com/timecamp2/timecamp-api) as associative arrays.

## Installation

```shell
$ composer require gisforgirard/php-timecamp-api
```

## Usage

```php

// Require composer autoloader
require "vendor/autoload.php";

$timecamp_client = new Timecamp\Connection('xxxxxxxxxxxxxxxxxxxxxxxx');
$activities = $timecamp_client->ComputerActivities()->getActivity($params);

foreach ($activities as $this_activity) {
    $app_id    = $this_activity['application_id'];
    $window_id = $this_activity['window_title_id'];
    echo $app_id." - ".$window_id."\n";
}

```

##Authentication

Authentication is very simple. You must pass your Timecamp API token when instantiating `Timecamp\Connection`. Example:

```php
$timecamp_client = new Timecamp\Connection('xxxxxxxxxxxxxxxxxxxxxxxx');
```

To get your API token go to [your Timecamp Account Settings](https://www.timecamp.com/people/edit).

## Client methods

### Users

### users()

Return all users from account.

**Example**

```php

$users = $timecamp_client->Users()->all();
foreach ($users as $this_user) {
    $all_users[$this_user['user_id']] = $this_user;
}
$users = $all_users;
print_r($users);

```

### tasks

### tasks($options)
these are all functions

### Time entries

####entries($options)
that are in the timecamp code

####timeEntries($options)
that i got inspired on but they never finished
