# FileMimer

[![CircleCI](https://circleci.com/gh/apokalipscke/FileMimer.svg?style=svg)](https://circleci.com/gh/apokalipscke/FileMimer)
[![Latest Stable Version](http://poser.pugx.org/apokalipscke/file-mimer/v)](https://packagist.org/packages/apokalipscke/file-mimer)
[![Total Downloads](http://poser.pugx.org/apokalipscke/file-mimer/downloads)](https://packagist.org/packages/apokalipscke/file-mimer)
[![Latest Unstable Version](http://poser.pugx.org/apokalipscke/file-mimer/v/unstable)](https://packagist.org/packages/apokalipscke/file-mimer)
[![License](http://poser.pugx.org/apokalipscke/file-mimer/license)](https://packagist.org/packages/apokalipscke/file-mimer)
[![PHP Version Require](http://poser.pugx.org/apokalipscke/file-mimer/require/php)](https://packagist.org/packages/apokalipscke/file-mimer)

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

returns:
```
"MPEG Audio"
```

**get from file**
```php
use Apokalipscke\FileMimer\FileMimer;

$fileTypeName = FileMimer::getFromFile("/path/to/your.file");
```

Need more examples? Have a look at the [tests](./tests).