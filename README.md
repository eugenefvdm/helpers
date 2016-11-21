# helpers

## Load Config Values

### Setup

* Create folder off \ called config
* Create file called "config.php", e.g. ssh.php

```php
return [
    'host' => 'host.domain.com',
    'username' => 'username',
    'password' => 'password',
];
```

Make sure you have a .gitignore file something like:

```sh
# Created by .ignore support plugin (hsz.mobi)
.gitignore
.idea/
vendor/
config/ <-- Make sure you have this entry!
```

### Usage

```php
$config = \Helpers\Helpers::Config('ssh');
```