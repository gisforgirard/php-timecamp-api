#php-timecamp-api

A [Timecamp](http://www.timecamp.com/) PHP client. Presents returned data from the [Timecamp API](https://github.com/timecamp2/timecamp-api) as associative arrays.

## Installation

```shell
$ composer require timecamp/php-timecamp-api
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

### Tasks
these are all functions based exactly on the timecamp api itself, just pass an array of key => var you want to send to the server... anyway there's more specific info in the respective files...

$users = $timecamp_client->Users()->get($array);
$users = $timecamp_client->Users()->post($array);
$users = $timecamp_client->Users()->put($array);

### TimeEntries
works the same as Tasks (and all the other functions for the most part as well)

$time_entries = $timecamp_client->TimeEntries()->get($array);
$time_entries = $timecamp_client->TimeEntries()->post($array);
$time_entries = $timecamp_client->TimeEntries()->put($array);

### Attendance
$attendance = $timecamp_client->Attendance()->get($array);

### AwayTime
$attendance = $timecamp_client->AwayTime()->get($array);

### Clients
$clients = $timecamp_client->Clients()->all();
$clients = $timecamp_client->Clients()->update($array);
$clients = $timecamp_client->Clients()->add($array);

### Invoices
$invoices = $timecamp_client->Invoices->all();
$invoices = $timecamp_client->Invoices()->update($array);
$invoices = $timecamp_client->Invoices()->add($array);

### Timer
$timer = $timecamp_client->Timer->all($array);
$timer = $timecamp_client->Timer->status($array);
$timer = $timecamp_client->Timer->stop($array);

### ComputerActivities (camel case function names? not sure...)
$activities = $timecamp_client->ComputerActivities()->getActivity('2014-03-07');
$activities = $timecamp_client->ComputerActivities()->getApplication(6319,2132);
$activities = $timecamp_client->ComputerActivities()->getWindowTitle(1,2);
$activities = $timecamp_client->ComputerActivities()->addActivity($array);
