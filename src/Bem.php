<?php namespace Aproskurnov\Bem;
/**
 * file Bem.php.
 * created: 17.03.15
 * @author: Aleksey Proskurnov
 * @copyright Copyright (c) 2015, Aleksey Proskurnov
 */

use GuzzleHttp\Url;
use Illuminate\Support\Facades\Config as Config;
use GuzzleHttp\Client as Client;

class Bem
{

    protected $_host = 'localhost';
    protected $_port = '3040';

    public function __construct( $host = null, $port = null)
    {
        if (is_null($host)){
            $host = Config::get('bem.host');
            if (!empty($host)){
                $this->_host = $host;
            }
        }else{
            $this->_host = $host;
        }

        if (is_null($port)){
            $port = Config::get('bem.port');
            if (!empty($port)){
                $this->_port = $port;
            }
        }else{
            $this->_port = $port;
        }
    }
    public function render( $currentPage, $params = [], $bundle = '' )
    {
        $client = new Client();
        $url = new Url('http', $this->_host, null, null, $this->_port, $currentPage);

        if (!empty($bundle)){
            $params['bundle'] = $bundle;
        }

        $body = ['data'=>$params];
        $request = $client->createRequest('POST', $url, ['json' => $body]);

        $response = $client->send($request);
        return $response->getBody()->getContents();
    }
}