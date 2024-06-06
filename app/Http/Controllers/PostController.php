<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Posts = Post::all();
        return view('dashboard', ['Posts' => $Posts]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_link' => 'nullable|url'
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('Post.index')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // العثور على البوست باستخدام الـ id المحدد
        $post = Post::find($id);
    
        // التأكد من وجود البوست
        if (!$post) {
            return redirect()->route('Post.index')->with('error', 'Post not found!');
        }
    
        // إرسال البوست إلى العرض
        return view('readmore')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // العثور على البوست المراد تعديله باستخدام الـ id المحدد
        $post = Post::find($id);
    
        // التأكد من وجود البوست
        if (!$post) {
            return redirect()->route('Post.index')->with('error', 'Post not found!');
        }
    
        // التحقق مما إذا كان المستخدم الحالي هو صاحب البوست
        if ($post->user_id !== auth()->user()->id) {
            return redirect()->route('Post.index')->with('error', 'You are not authorized to edit this post!');
        }
    
        // إرسال البوست إلى نموذج التعديل
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    $imageName = null;

        Post::where('id' , $id)->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('Post.index')->with('success', 'Post edit successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // العثور على البوست المراد حذفه باستخدام الـ id المحدد
        $post = Post::find($id);
    
        // التأكد من وجود البوست
        if (!$post) {
            return redirect()->route('Post.index')->with('error', 'Post not found!');
        }
    
        // التحقق مما إذا كان المستخدم الحالي هو صاحب البوست
        if ($post->user_id !== auth()->user()->id) {
            return redirect()->route('Post.index')->with('error', 'You are not authorized to delete this post!');
        }
    
        // حذف البوست
        $post->delete();
    
        // تخزين رسالة النجاح في الجلسة
        session()->flash('success', 'Post deleted successfully!');
    
        return redirect()->route('Post.index');
    }
    
    

}
