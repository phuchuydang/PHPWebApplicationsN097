<?php
namespace App\Services;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class CategoryService
{
    public $bookService = 'http://bookservice.test:8080/api/';
    public function getCategory()
    {
        $minutes = 60 * 5000;
        return Cache::remember('categories', $minutes, function () {
            $client = new Client();
            try {
                $response = $client->get($this->bookService.'category');
                return json_decode($response->getBody(), true);
            } catch (\Exception $e) {
                return [];
            }
        });
    }


}
