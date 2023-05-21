# Процессор дат

Библиотека позволяет получить строку с текущим годом


## Требования

- PHP 7.4

## Установка

```bash
$ composer require fdfkc/otus-composer-package
```

## Использование

```php
<?php
$processor = new TimeProcessor();
echo $processor->getCurrentYear(); // 2023
```