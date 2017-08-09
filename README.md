# Slim Controllers

Slim Controllers is an extremely lightweight framework to provide controllers for Slim 3.

## Installation

```bash
composer require icosillion/slim-controllers
```

## Usage
Use Slim's groups to group your controller actions together in your main Slim file.

```php
<?php

use Slim\App;

$app = new App();

$app->group('/', function () use ($app) {
    $controller = new RootController($app);

    $app->get('', $controller('index'));
});

$app->run();
```

Extend your controller from the `Controller` class.

```php
<?php

use Icosillion\SlimControllers\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class RootController extends Controller
{
    public function index(Request $request, Response $response, array $args)
    {
        $response->getBody()->write('Hello World!');

        return $response;
    }
}
```

## License

This project is licensed under the MIT license. A copy of this is available in the LICENSE file.