# FileMimer

Get the human file type name from mime types and files.

## installation

```shell script
composer require apokalipscke/file-mimer
```

## usage

**get from mime type**
```php
use Apokalipscke\FileMimer\FileMimer;

$fileTypeName = FileMimer::get('audio/mpeg');
```

**get from file**
```php
use Apokalipscke\FileMimer\FileMimer;

$fileTypeName = FileMimer::getFromFile("/path/to/your.file");
```

Need more examples? Have a look at the [tests](./tests).