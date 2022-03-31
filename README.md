<h1 align="center">Hundredapps-Repository</h1>

Repository is an implementation of repository pattern for Hundredapps Codebase.

Getting Started
---

Installation :

```
$ composer require togu-inotek/repository
```

How to use it (sample files) :

- Create file app/Contracts/Repository/IRepository.php.

```php
<?php

namespace App\Contracts\Repository;

use Hundredapps\Repository\Contracts\Allable;
use Hundredapps\Repository\Contracts\Getable;
use Hundredapps\Repository\Contracts\Addable;
use Hundredapps\Repository\Contracts\Modifyable;
use Hundredapps\Repository\Contracts\Removeable;

interface IRepository extends Allable, Addable, Removeable
{
    //
}
```

- Create file app/Repositories/Eloquent/MyRepository.php.

```php
<?php

namespace App\Repositories\Eloquent;

use App\Contracts\Repository\IRepository;
use Hundredapps\Repository\AbstractRepository;

class MyRepository extends AbstractRepository implements IRepository
{
    /**
     * @param array $querystring
     * @return mixed
     */
    public function all($querystring = []) {}

    /**
     * @param array $data
     * @return mixed
     */
    public function add($data) {}

    /**
     * @param int|string $identifier
     * @return mixed
     */
    public function remove($identifier) {}
}
```

- Create file app/Providers/RepositoryServiceProvider.php.

```php
<?php

namespace App\Providers;

use Hundredapps\Repository\RepositoryServiceProvider as ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $map =
    [
        \App\Contracts\Repository\IRepository::class => \App\Repositories\Eloquent\MyRepository::class,
    ];
}
```

- Put `App\Providers\RepositoryServiceProvider` to service provider configuration list.

Author
---

- Togu Inovasi Teknologi ([@togu-inotek](https://togu.co.id))
