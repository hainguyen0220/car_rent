<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogAddRequest;
use App\Models\Blog;

use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminBlogController extends Controller
{
    use StorageImageTrait;
    private $blog;
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function index()
    {
        $blogs = $this->blog->paginate(5);
        return view('admin.blog.index', compact('blogs')); 
    }

    public function create()
    {
        return view('admin.blog.add'); 
    }

    public function store(BlogAddRequest $request)
    {
        try {
            $dataInsert = [
                'title' => $request->title,
                'content' => $request->content,

            ];
            $dataImageBlog = $this->storageTraitUpload($request, 'image', 'blog');
            
            if (!empty($dataImageBlog)) {
                // $dataInsert['image_name'] = $dataImageBlog['file_name'];
                $dataInsert['image'] = $dataImageBlog['file_path'];
            }
            $this->blog->create($dataInsert);
            return redirect()->route('blog.index');
        } catch (\Exception $exception) {
            Log::error('Lỗi : ' . $exception->getMessage() . '---Line: ' . $exception->getLine());
        }
    }
    public function edit($id)
    {
        $blog = $this->blog->find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        try {
            $dataUpdate = [
                'name' => $request->name,
                'description' => $request->description
            ];
            $dataImageSlider = $this->storageTraitUpload($request, 'image', 'blog');
            if( !empty($dataImageSlider) ) {
                $dataUpdate['image'] = $dataImageSlider['file_path'];
            }
            $this->blog->find($id)->update($dataUpdate);
            return redirect()->route('blog.index');
        } catch (\Exception $exception) {
            Log::error('Lỗi : ' . $exception->getMessage() . '---Line: ' . $exception->getLine());
        }

    }



}
