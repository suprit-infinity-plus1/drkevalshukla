<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function store(Request $request)
    {
        // dd($request->all());
        // $data = $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'required',
        //     'cover_image' => 'nullable|image|mimes:jpg,jpeg,png',
        //     'author' => 'required|string|max:255',
        // ]);
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png',
            'author' => 'required|string|max:255',
        ]);

        // dd($request->all());
        if ($validator->fails()) {
            return redirect(route('admin.blogs'))
                ->withErrors($validator)
                ->withInput();
        }

        // Get validated data
        $data = $validator->validated();
        // Generate slug for blog_url
        $data['blog_url'] = Str::slug($data['title']);
        // if ($request->hasFile('cover_image')) {
        //     $data['cover_image'] = $request->file('cover_image')->store('blogs', 'public');
        // }

        // Handle cover image upload
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $blogFolder = Str::slug($data['title']);
            $destinationPath = public_path('storage/images/blogs/' . $blogFolder);

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $imageName = time() . '_' . $blogFolder . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);

            // Save the relative path to the image
            $data['cover_image'] = 'storage/images/blogs/' . $blogFolder . '/' . $imageName;
        }
        // dd($request->all());
        $blog = Blog::create($data);

        // Append to BlogSeeder if blog was created
        if ($blog) {
            $seederPath = base_path('database/seeders/BlogSeeder.php');
            $blogArray = var_export([
                'cover_image' => $blog->cover_image,
                'blog_url' => $blog->blog_url,
                'title' => $blog->title,
                'description' => $blog->description,
                'author' => $blog->author,
            ], true);
            $seederEntry = "\n        Blog::create($blogArray);";
            file_put_contents($seederPath, $seederEntry, FILE_APPEND);
        }


        return redirect()->route('admin.blogs')->with('success', 'Blog created!');
        // return redirect()->route('blogs2.index')->with('success', 'Blog created!');

    }


    public function blogsUpdate(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png',
            'author' => 'required|string|max:255',
        ]);

        $data['blog_url'] = \Str::slug($data['title']);

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');

            // Delete old file manually if needed
            if (!empty($blog->cover_image) && file_exists(public_path('blogs/' . basename($blog->cover_image)))) {
                unlink(public_path('blogs/' . basename($blog->cover_image)));
            }

            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('blogs'), $filename); // Save in public/blogs

            $data['cover_image'] = 'blogs/' . $filename; // Save relative path in DB
        }

        // No `else` here, so the existing image remains untouched


        // if ($request->hasFile('cover_image')) {
        //     $data['cover_image'] = $request->file('cover_image')->store('blogs', 'public');
        // } else {
        //     unset($data['cover_image']);
        // }

        $blog->update($data);

        return redirect()->route('admin.blogs')->with('success', 'Blog updated successfully.');
    }

    // Delete blog
    public function blogsDelete($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->cover_image && \Storage::disk('public')->exists($blog->cover_image)) {
            \Storage::disk('public')->delete($blog->cover_image);
        }

        $blog->delete();

        return redirect()->route('admin.blogs')->with('success', 'Blog deleted successfully.');
    }
    public function blogs()
    {
        $blogs = Blog::latest()->get();
        return view('blogs2.index', compact('blogs'));
    }
    public function blogsAdd()
    {
        return view('blogs2.create');
    }
    public function blogsEdit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs2.edit', compact('blog'));
    }
}
