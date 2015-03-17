<?php namespace AProskurnov\Bem;
/**
 * file Bem.php.
 * created: 17.03.15
 * @author: Aleksey Proskurnov
 * @copyright Copyright (c) 2015, Aleksey Proskurnov
 */

use Illuminate\Support\Facades\Facade;

class BemFacade extends Facade {

    protected static function getFacadeAccessor() { return 'bem'; }

}