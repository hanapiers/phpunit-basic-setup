# PHPUnit Basic Setup

### Pre-Requisite
- Composer (must be installed already)
- PHP 5.5 (or lower)

### Installation
After downloading this repository, execute the ff. command in the root directory:
```
composer install
```

### Running the Test
Execute the command below to see PHPUnit in action.
```
./vendor/bin/phpunit
```

If the command yielded the result below then you are successful with the installation.
```
FAILURES!
Tests: 4, Assertions: 4, Failures: 2.
```
### Breakdown
**_composer.json_**
```json
{
    "require-dev" : {
        "phpunit/phpunit" : "4.8.0"
    },
    "autoload" : {
        "psr-4" : {
            "Project\\" : "app/"
        }
    }
}
```

- We require the dev package of PHPUnit 4.8 that is compatible with PHP 5.5 or lower.
- We want the autoloader to map the `app/` directory to `Project` namespace.

**_phpunit.xml_**
```xml
<?xml version="1.0" encoding="utf-8" ?>
<phpunit colors="true" bootstrap="./vendor/autoload.php">
    <testsuites>
        <testsuite name="The project's test suite">
            <directory>./tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```
The above configuration tells PHPUnit to load `./vendor/autoload.php` first before executing the test cases in the `tests` directory

