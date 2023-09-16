<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Cookie;

//  php artisan migrate:fresh
//  php artisan db:seed --class=DatabaseSeeder

class PageController extends Controller
{
    public function index(){
        $products = DB::select('select * from products order by id_product');
        $i = 12;
        return view('home', ['products' => $products, 'i'=> $i]);
    }

    public function catalog(Request $request){
        $products = DB::select('select * from products order by id_product');
        $i = 24;

        $sort_by = $request->input('sort_by');

        if ($sort_by == 'name_asc') {
            $catalogs = DB::table('products')
                        ->where('id_product', '>', 0)
                        ->orderBy('name', 'asc')
                        ->get();
        } elseif ($sort_by == 'name_desc') {
            $catalogs = DB::table('products')
                        ->where('id_product', '>', 0)
                        ->orderBy('name', 'desc')
                        ->get();
        } elseif ($sort_by == 'price_asc') {
            $catalogs = DB::table('products')
                        ->where('id_product', '>', 0)
                        ->orderBy('price', 'asc')
                        ->get();
        } elseif ($sort_by == 'price_desc') {
            $catalogs = DB::table('products')
                        ->where('id_product', '>', 0)
                        ->orderBy('price', 'desc')
                        ->get();
        } 
        return view('catalog', ['products' => $products, 'i'=> $i]);


    }

    public function subcategory($subcategory){
        $products = DB::select('select * from products where subcategory = :mySubcategory', ['mySubcategory'=> $subcategory]);
        return view('catalog', [ 'products' => $products]);
    }

    public function category($category){
        $products = DB::select('select * from products where category = :myCategory', ['myCategory'=> $category]);
        return view('catalog', [ 'products' => $products]);
    }

    public function about(){
        return view('about');
    }

    public function cart(Request $request){

        $cookie = ($request->cookie('product'));

        if(is_null($cookie)){
            $products = DB::select('select * from products order by id_product');
            return view('cart', ['cookie'=>'kek', 'products' => $products]);
        }

        $products_cookie = unserialize($request->cookie('product'));

        $products_arr = [];

        foreach($products_cookie as $product){
            $product_par = DB::table('products')->select('id_product', 'name', 'photo', 'price')->where('id_product','=', $product)->get();


            //DB::select('select id_product, name, photo, price from products where id_product = :myId', ['myId'=> $product]);
            $product_par[0]->quantity = $product['quantity'];
            array_push($products_arr, $product_par[0]);
        }

        $products = DB::select('select * from products order by id_product');
        return view('cart', [ 'products' => $products, 'cookie'=>$products_arr]);
    }

    public function contacts(){
        return view('contacts');
    }

    public function contactStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'tel' => 'required|regex:/^\+?[78][-\(]?\d{3}\)?-?\d{3}-?\d{2}-?\d{2}$/',
            'text' => 'required'
        ]);

       DB::insert('insert into messages (name, email, tel, text) values (:name, :email, :tel, :text)',
                    ['name'=>$request->input('name'),
                    'email'=> $request->input('email'),
                    'tel'=> $request->input('tel'),
                    'text'=>$request->input('text')]);
       return view('contacts');
    }

    public function delivery(){
        return view('delivery');
    }



    public function processing(Request $request){
        $cart = json_decode(request()->input('str', ''), true);
       //return var_dump($cart);

        return view('processing', ['cart'=>$cart]);
    }

    public function product($id_product){
        $products = DB::select('select * from products where id_product = :myId', ['myId'=> $id_product]);
        return view('product', ['product' => $products[0], 'id_product' => $id_product]);
    }

    public function admin(){
        return view('admin.admin');
    }
    public function admin_home(){
        $products = DB::select('select * from products order by id_product');
        $i = 24;
        return view('admin.admin-home', ['products' => $products, 'i'=> $i]);
    }
    public function admin_orders(){
        $orders = DB::select('select * from orders order by id_order desc');
        return view('admin.admin-orders',['orders' => $orders]);
    }
    public function admin_order($id_order){
        $orders = DB::select('select * from orders where id_order = :myId', ['myId'=> $id_order]);
        $ordered_products = DB::select('select * from ordered_products where id_order = :myId', ['myId'=> $id_order]);
        return view('admin.admin-order', ['order' => $orders[0], 'id_order' => $id_order, 'ordered_product' => $ordered_products]);
    }
    public function status(Request $request, $id_order){
        DB::update('update orders set status = ? where id_order = ?', [$request->input('status'), $id_order]);
        $orders = DB::select('select * from orders where id_order = :myId', ['myId'=> $id_order]);
        $ordered_products = DB::select('select * from ordered_products where id_order = :myId', ['myId'=> $id_order]);
        return view('admin.admin-order', ['order' => $orders[0], 'id_order' => $id_order, 'ordered_product' => $ordered_products]);
    }


    public function admin_messages(){
        $messages = DB::select('select * from messages order by id_message desc');
        return view('admin.admin-messages',['messages' => $messages]);
    }

    public function admin_create(){
        return view('admin.admin-create');
    }

    public function create(Request $request){

        $validated = $request->validate([
            'photo' => 'required|unique:products',
            'name' => 'required|unique:products',
            'category' => 'required',
            'price' => 'required',
            'location' => 'required',
            'description' => 'required|unique:products',
        ]);
        $img = $request->file('photo');
        // return var_dump($img);
        $imgName = $img->getClientOriginalName();
        $img->move(public_path() . '/img', $imgName);
        $img_path = $imgName;
        DB::insert('insert into products (photo, name, category, 
                     price,  location,
                     description) values (:photo, :name, :category,
                     :price, :location,
                     :description)',
                    ['photo'=>$img_path,
                    'name'=>$request->input('name'),
                    'category'=>$request->input('category'),
                    'price'=>$request->input('price'),
                    'location'=>$request->input('location'),
                    'description'=>$request->input('description')]);
        return view('admin.admin-create');
    }

    public function admin_update($id_product){
        $products = DB::select('select * from products where id_product = :myId', ['myId'=> $id_product]);
        return view('admin.admin-update', ['product' => $products[0], 'id_product' => $id_product]);
    }

    public function update(Request $request, $id_product){
        $validated = $request->validate([
            'photo' => 'required',
            'name' => 'required',
            'article' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'country' => 'required',
            'production' => 'required',
            'location' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'colour' => 'required',
            'material' => 'required',
            'description' => 'required'
        ]);
        $img = $request->file('photo');
        // return var_dump($img);
        $imgName = $img->getClientOriginalName();
        $img->move(public_path() . '/img', $imgName);
        $img_path = $imgName;
        DB::update('update products set photo = ? where id_product = ?', [$img_path, $id_product]);
        DB::update('update products set name = ? where id_product = ?', [$request->input('name'), $id_product]);
        //DB::update('update products set category = ? where id_product = ?', [$request->input('category'), $id_product]);
        //DB::update('update products set subcategory = ? where id_product = ?', [$request->input('subcategory'), $id_product]);
        DB::update('update products set article = ? where id_product = ?', [$request->input('article'), $id_product]);
        DB::update('update products set brand = ? where id_product = ?', [$request->input('brand'), $id_product]);
        DB::update('update products set price = ? where id_product = ?', [$request->input('price'), $id_product]);
        DB::update('update products set country = ? where id_product = ?', [$request->input('country'), $id_product]);
        DB::update('update products set production = ? where id_product = ?', [$request->input('production'), $id_product]);
        DB::update('update products set location = ? where id_product = ?', [$request->input('location'), $id_product]);
        DB::update('update products set weight = ? where id_product = ?', [$request->input('weight'), $id_product]);
        DB::update('update products set height = ? where id_product = ?', [$request->input('height'), $id_product]);
        DB::update('update products set colour = ? where id_product = ?', [$request->input('colour'), $id_product]);
        DB::update('update products set material = ? where id_product = ?', [$request->input('material'), $id_product]);
        DB::update('update products set description = ? where id_product = ?', [$request->input('description'), $id_product]);
        return "<h1>данные сохранены..........................</h1> <p> <a href = ".route('admin-home').">тебе сюда</a></p>";
    }

    public function delete($id_product)
    {
        DB::delete('delete from products where id_product = ?', [$id_product]);
        return"<h1>данные delete..........................</h1> <p> <a href = ".route('admin-home').">тебе сюда</a></p>";
    }

    public function admin_subcategory($subcategory){
        $products = DB::select('select * from products where subcategory = :mySubcategory', ['mySubcategory'=> $subcategory]);
        return view('admin.admin-home', [ 'products' => $products]);
    }

    public function admin_category($category){
        $products = DB::select('select * from products where category = :myCategory', ['myCategory'=> $category]);
        return view('admin.admin-home', [ 'products' => $products]);
    }

    public function to_cart(Request $request, $id_product){
        $cookie = ($request->cookie('product'));

        if(is_null($cookie)){
            $array = [];
        }else{
            $array = unserialize($request->cookie('product'));
        }

        $arr_data =[];

        $key = array_search($id_product, array_column($array, 'id_product'));

        if($key === false){
            $arr_data['id_product'] = $id_product;
            $arr_data['quantity'] = 1;
            array_push($array, $arr_data);
        }

        $response = new Response(redirect()->back());
        $response->withCookie(cookie('product', serialize($array), 1440));

        return $response;
    }

    public function delete_product(Request $request, $id_product){

        $cookie = ($request->cookie('product'));
        $products_cookie = unserialize($request->cookie('product'));

        foreach($products_cookie as $product => $array){
            if($array['id_product'] == $id_product){
                $key = array_search($id_product, $array);
                unset($products_cookie[$product]);
            }
        }
        //return var_dump($products_cookie);
        $response = new Response(redirect()->back());
        $response->withCookie(cookie('product', serialize($products_cookie), 1440));

        return $response;

    }

    public function minus(Request $request, int $id_product){

        $cookie = ($request->cookie('product'));

        if(is_null($cookie)){
            $products = DB::select('select * from products order by id_product');
            return view('cart', ['cookie'=>'kek', 'products' => $products]);
        }

        $products_cookie = unserialize($request->cookie('product'));

        foreach($products_cookie as $product => $array){
            if($array['id_product'] == $id_product){
                if($products_cookie[$product]['quantity']>1){
                    $products_cookie[$product]['quantity'] -= 1;
                }
            }
        }
        //$products = DB::select('select * from products order by id_product');
        $response = new Response(redirect()->back());
        $response->withCookie(cookie('product', serialize($products_cookie), 1440));

        return $response;

    }

    public function plus(Request $request, int $id_product){

        $cookie = ($request->cookie('product'));

        if(is_null($cookie)){
            $products = DB::select('select * from products order by id_product');
            return view('cart', ['cookie'=>'kek', 'products' => $products]);
        }

        $products_cookie = unserialize($request->cookie('product'));

        foreach($products_cookie as $product => $array){
            if($array['id_product'] == $id_product){
                if($products_cookie[$product]['quantity']<10){
                    $products_cookie[$product]['quantity'] += 1;
                }
            }
        }
        //return var_dump($products_cookie);
        //$products = DB::select('select * from products order by id_product');
        $response = new Response(redirect()->back());

        $response->withCookie(cookie('product', serialize($products_cookie), 1440));

        return $response;

    }

    public function order_store(Request $request){
        if($request->input('delivery')=='Самовывоз'){
            $validated = $request->validate([
                'surname' => 'required|max:30',
                'name' => 'required|max:30',
                'tel' => 'required|regex:/^\+?[78][-\(]?\d{3}\)?-?\d{3}-?\d{2}-?\d{2}$/',
                'email' => 'required',
                'delivery' => 'required',
                'pay' => 'required',
            ]);

            $cart = json_decode(request()->input('str', ''), true);

            $order_num = rand(1000000,9999999);

            DB::insert('insert into orders (surname, name, patronymic, email, tel, delivery, pay, comment, sum, date, status, order_num)
                        values (:surname, :name, :patronymic, :email, :tel, :delivery, :pay, :comment, :sum, :date, :status, :order_num)',
                        ['surname'=>$request->input('surname'),
                        'name'=> $request->input('name'),
                        'patronymic'=> $request->input('patronymic'),
                        'tel'=> $request->input('tel'),
                        'email'=>$request->input('email'),
                        'delivery'=>$request->input('delivery'),
                        'pay'=>$request->input('pay'),
                        'comment'=>$request->input('comment'),
                        'sum'=>$cart['sum'],
                        'date'=>Now('Europe/Moscow'),
                        'status'=>'В обработке',
                        'order_num'=>$order_num,
                        ]);
        }else{
            $validated = $request->validate([
                'surname' => 'required|max:30',
                'name' => 'required|max:30',
                'tel' => 'required|regex:/^\+?[78][-\(]?\d{3}\)?-?\d{3}-?\d{2}-?\d{2}$/',
                'email' => 'required',
                'delivery' => 'required',
                'pay' => 'required',
                'region' => 'required|max:50',
                'city' => 'required|max:50',
                'street' => 'required|max:50',
                'house' => 'required|integer',
                'corpus' => 'integer',
                'flat' => 'required|integer',
            ]);

            $cart = json_decode(request()->input('str', ''), true);

            $order_num = rand(1000000,9999999);

            DB::insert('insert into orders (surname, name, patronymic, email, tel, delivery, pay, region, city, street, house, corpus, flat, comment, sum, date, status, order_num)
                        values (:surname, :name, :patronymic, :email, :tel, :delivery, :pay, :region, :city, :street, :house, :corpus, :flat, :comment, :sum, :date, :status, :order_num)',
                        ['surname'=>$request->input('surname'),
                        'name'=> $request->input('name'),
                        'patronymic'=> $request->input('patronymic'),
                        'tel'=> $request->input('tel'),
                        'email'=>$request->input('email'),
                        'delivery'=>$request->input('delivery'),
                        'pay'=>$request->input('pay'),
                        'region'=>$request->input('region'),
                        'city'=>$request->input('city'),
                        'street'=>$request->input('street'),
                        'house'=>$request->input('house'),
                        'corpus'=>$request->input('corpus'),
                        'flat'=>$request->input('flat'),
                        'comment'=>$request->input('comment'),
                        'sum'=>$cart['sum'],
                        'date'=>Now('Europe/Moscow'),
                        'status'=>'В обработке',
                        'order_num'=>$order_num,
                        ]);
        }


        $id_order = DB::table('orders')->select('id_order')->where('order_num', '=', $order_num)->get();
        $id_order = $id_order[0]->id_order;
        //return var_dump($cart);
        $products = $cart['products'];

        foreach($products as $product){
            DB::insert('insert into ordered_products
            (id_product, id_order, name, photo, quantity, price)
            values (:id_product, :id_order, :name, :photo, :quantity, :price)',
            ['id_product'=>$product['id_product'],
            'id_order'=>$id_order,
            'name'=>$product['name'],
            'photo'=>$product['photo'],
            'quantity'=>$product['quantity'],
            'price'=>$product['price'],
            ]);


        }
        Cookie::queue(
            Cookie::forget('product')
        );
        // return redirect('home');
        return "<h1>Заказ №$order_num успешно оформлен</h1>
        <a href=".route('home').">На главную</a>";
    }

}
