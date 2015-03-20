# Laravel 5 Bem View

## Installation

You should install this package through Composer.

Edit your project's `composer.json` file to require `aproskurnov/bemview`.

    "require": {
        "aproskurnov/bemview": "dev-master"
    },

Next, update Composer from the Terminal:
    `composer update`

Once this operation completes, the final step is to add the service provider.
Open `app/config/app.php`, and add a new item to the providers array.

  `'Aproskurnov\Bem\BemServiceProvider',`

And add a new item to the aliases array.

  'Bem' => 'Aproskurnov\Bem\BemFacade',

If you want set own port and host, execute command

    `php artisan vendor:publish --provider="BemServiceProvider" --tag="config"`

Usage
-------
Call of the method: `Bem::render($page, $params, $bundle)`
