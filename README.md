### Php info

Пакет для получения информации:

- версии php
- запущенных модулей

#### Требования

- php >= 7.0

#### Установка

```bash
composer require working-code/example-package
```

#### Примеры использования

##### Вывод версии php:

```php
$phpInfo = new PhpInfo();
echo $phpInfo->getVersion();
```

##### Просмотр списка запущенных модулей:

```php
$phpInfo = new PhpInfo();
print_r($phpInfo->getExtensions());
```
