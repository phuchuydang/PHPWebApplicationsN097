<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Services\CategoryService;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
class BookController extends Controller
{
    public $bookService = 'http://bookservice.test:8080/api/';
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function bookDetails($id)
    {
        $categories = $this->categoryService->getCategory();
        $client = new Client();
        try {
            $response = $client->get($this->bookService.'books/'.$id);
            $book = json_decode($response->getBody(), true);
            return view('main.book-details', compact('book', 'categories'));
        } 
        catch (\Exception $e) {
            return redirect()->intended('/')->with('error', 'Login failed');
        }
    }

    public function search(Request $request)
    {
        $client = new Client();
        $keyword = $request->input('keyword');
        $page = $request->input('page', 1);
        $perPage = $request->input('perPage', 2);
        $categories = $this->categoryService->getCategory();
        // //call to book service to get book by id
        try {
            $response = $client->get($this->bookService.'books/search/'.$request->keyword);
            $responseData  = json_decode($response->getBody(), true);
            //paginate books
            if($responseData){
                $books = json_decode($response->getBody(), true);
               // Số lượng sách hiển thị trên mỗi trang
                $perPage = 8;

                // Số trang hiện tại, lấy từ query string hoặc mặc định là 1
                $currentPage = $request->query('page', 1);

                // Tạo một LengthAwarePaginator từ kết quả sách và các thông số phân trang
                $paginator = new LengthAwarePaginator(
                    $books['data'],   // Dữ liệu sách
                    $books['total'],  // Tổng số sách
                    $perPage,         // Số lượng sách trên mỗi trang
                    $currentPage,     // Trang hiện tại
                    ['path' => $request->url(), 'query' => $request->query()]
                );
                return view('main.search-result', compact('paginator', 'categories'));
            }
            else{
                return view('main.search-result')->with('error', 'No result found')->with('categories', $categories);
            }
        } 
        catch (\Exception $e) {
            return view('main.search-result')->with('error', 'No result found')->with('categories', $categories);
        }
    }

    public function allBook(Request $request){
        $currentPage = $request->query('page', 1);
        $perPage = $request->query('perPage', 10);
        
        $http = new Client(
            [
                'base_uri' => $this->bookService,
                'timeout' => 2.0,
            ]
        );

        $response = $http->request('GET', 'books', [
            'query' => [
                'page' => $currentPage,
                'perPage' => $perPage,
            ]
        ]);

        $books = json_decode($response->getBody(), true);
        $paginator = new \Illuminate\Pagination\LengthAwarePaginator(
            $books['data'],
            $books['total'],
            $perPage,
            $currentPage,
            ['path' => url()->current()]
        );

        // return view('main.all-book', compact('paginator'));
    }

}
