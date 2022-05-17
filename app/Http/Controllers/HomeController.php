<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Article;
use App\Models\Order;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        } 
        else 
        {
            $data = Product::latest()->limit(6)->get();

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone)->count();

            $categoryproduct = Category::all();

            $articles = Article::latest()->limit(3)->get();

            $title = 'SeaShrimps - Website';

            return view('user.home', compact('data', 'count', 'categoryproduct', 'articles', 'title'));
        }
    }

    public function index()
    {   
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            $data = Product::latest()->limit(6)->get();
            
            $categoryproduct = Category::all();

            $articles = Article::latest()->limit(3)->get();

            $title = 'SeaShrimps - Website';
            
            return view('user.home', compact('data', 'categoryproduct', 'articles', 'title'));
        }
    }

    public function search(Request $request)
    {  
        if(Auth::id())
        {
            $search = $request->search;

            $data = Product::where('title', 'Like', '%'.$search.'%')->get();

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone)->count();

            $title = 'SeaShrimps - Search';

            return  view('user.searchproducts', compact('data', 'search', 'count', 'title'));
        }
        else
        {
            $search = $request->search;

            $data = Product::where('title', 'Like', '%'.$search.'%')->get();

            $title = 'SeaShrimps - Search';

            return  view('user.searchproducts', compact('data', 'search', 'title'));
        }     
    }

    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user = auth()->user();
            
            $product = Product::find($id);

            $cart = new Cart;

            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->save();
            
            return redirect()->back()->with('message', 'Product Added on Cart Successfully');
        }
        else
        {
            return redirect('login');
        }
    }

    public function addshowcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user = auth()->user();
            
            $product = Product::find($id);

            $cart = new Cart;

            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->save();
            
            return redirect('showcart');
        }
        else
        {
            return redirect('login');
        }
    }

    public function showcart()
    {
        $user = auth()->user();

        $count = Cart::where('phone', $user->phone)->count();

        $cart = Cart::where('phone', $user->phone)->get();

        return view('user.showcart', compact('count', 'cart'));
    }

    public function viewproducts()
    {
        if(Auth::id())
        {
            $data = Product::all();

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone)->count();

            $title = 'Products - SeaShrimps';

            return view('user.viewproducts', compact('data', 'count', 'title'));
        }
        else
        {
            $data = Product::all();

            $title = 'Products - SeaShrimps';

            return view('user.viewproducts', compact('data', 'title'));
        }     
    }

    public function category(Category $category)
    {
        if(Auth::id())
        {
            $categoryproduct = Category::all();

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone)->count();

            $title = 'Category Product - SeaShrimps';

            return view('user.categories', ['category' => $category->products], compact('categoryproduct', 'count', 'title'));
        } 
        else
        {
            $categoryproduct = Category::all(); 
            
            $title = 'Category Product - SeaShrimps';

            return view('user.categories', ['category' => $category->products], compact('categoryproduct', 'title'));   
        }
    }

    public function viewarticle(Article $article)
    {
        if(Auth::id())
        {
            $title = "Article - SeaShrimps";

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone)->count();

            return view('user.viewarticle', compact('title', 'count'), ['article' => $article]);            
        }
        else
        {
            $title = "Article - SeaShrimps";

            return view('user.viewarticle', compact('title'), ['article' => $article]);
        }
    }

    public function about()
    {
        if(Auth::id())
        {
            $title = 'About us - SeaShrimps';

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone)->count();

            return view('user.about', compact('title', 'count'));
        }
        else
        {

        }
        $title = 'About us - SeaShrimps';

        return view('user.about', compact('title'));
    }

    public function contact()
    {
        if(Auth::id())
        {
            $title = 'Contact us - SeaShrimps';

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone)->count();

            return view('user.contact', compact('title', 'count'));
        }
        else
        {
            $title = 'Contact us - SeaShrimps';

            return view('user.contact', compact('title'));
        }
    }

    public function deletecart($id)
    {
        $data = Cart::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Product Removed Successfully');
    }

    public function checkout(Request $request)
    {
        $user = Auth()->user();

        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;

        foreach($request->productname as $key=>$product)
        {
            $order = new Order;

            $order->product_name = $request->productname[$key];
            $order->quantity = $request->quantity[$key];
            $order->price = $request->price[$key];

            $order->name = $name;
            $order->phone = $phone;
            $order->address = $address;

            $order->status = 'Not Delivered';

            $order->save();
        }
        DB::table('carts')->where('phone', $phone)->delete();
        return redirect()->back()->with('message', 'Product Checkout Successfully');
    }

    public function detailproduct($id)
    {
        if(Auth::id())
        {
            $data = Product::where('id', $id)->get();

            $products = Product::latest()->limit(3)->get();

            $title = 'Detail Product';

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone)->count();

            return view('user.detailproduct', compact('data', 'title', 'products', 'count'));
        }
        else
        {
            $data = Product::where('id', $id)->get();

            $products = Product::latest()->limit(3)->get();
    
            $title = 'Detail Product';
    
            return view('user.detailproduct', compact('data', 'title', 'products'));
        }
    }

    public function articles()
    {
        if(Auth::id())
        {
            $title = 'Articles - SeaShrimps';

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone)->count();

            $articles = Article::all();

            return view('user.articles', compact('count', 'title', 'articles'));
        }
        else
        {
            $title = 'Articles - SeaShrimps';

            $articles = Article::all();

            return view('user.articles', compact('title', 'articles'));
        }
    }
}
