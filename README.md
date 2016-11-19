# helpers

## Load Config Values

### Setup

* Create folder off \ called config
* Create file called "config.php", e.g. ssh.php

```php
return [
    'host' => 'mysecret.host.com',
    'username' => 'root_username',
    'password' => 'root_password',
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