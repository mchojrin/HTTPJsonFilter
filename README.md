# Coding Challenge solution

This is the code referenced in [this video](https://www.youtube.com/watch?v=vkM_BZbAMYA).

It's a POC for the usage of Collections and Iterators in PHP.

## Run

There are two entry point scripts within this project:

1. `output_json.php`
2. `run.php`

The first is just an auxiliary script used to simulate a remote webservice. In order for the demo to work there should be a webserver running this script.

Use the following command to get it setup locally:

```command
php -S localhost:8007 output_json.php
```

The second is the actual script that implements the filtering logic.

To get the expected result use a command with the following structure:

```command
OFFERS_ENDPOINT=http://localhost:8007 php run.php SUBCOMMAND PARAM1 PARAM2 ... PARAMN
```

Available sub-commands are:

* `count_by_vendor_id`
* `count_by_price_range`

Examples:
=========

```command
OFFERS_ENDPOINT=http://localhost:8007 php run.php count_by_vendor_id 35
```

```command
OFFERS_ENDPOINT=http://localhost:8007 php run.php count_by_price_range 5 20
```
