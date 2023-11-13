<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleEditRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$query = Article::where('active','Y')->get();
        $query = Article::orderBy('created_at', 'desc')->paginate(5)->onEachSide(5);
        return view('article.index', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $active = (isset($request->active))? $request->active : 'N';
        //Article::create($request->all());
        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'active' => $active
        ]);

        $fileName = $article->id . "." . $request->file->extension();
        //$filepath = Storage::url('uploads/'. $fileName);
        //$filepath = asset('uploads/'. $fileName);

        Article::where('id',$article->id)->update([
            'image_path' => $fileName
        ]);

        //Store File in Public Folder
        $request->file->move(public_path('uploads'), $fileName);
        //Store File in Storage Folder
        //$request->file->storeAs('uploads', $fileName); //e.g. storage/app/uploads/1.jpg

        return redirect('article');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //$query = Article::find('id');
        $query = Article::where('id', $id)->first();
        return view('article.edit', compact('query'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleEditRequest $request, string $id)
    {
        $active = (isset($request->active))? $request->active : 'N';

        $article = Article::where('id', $id)->first();
        $fileName = '';
        if($request->hasFile('file')){
            $fileName = ( empty($article->image_path))? $article->id . "." . $request->file->extension() : $article->image_path;
            $image_path = public_path("uploads/" . $fileName);
            //dd($image_path);

            if (File::exists($image_path)) {
                File::delete($image_path);
                //unlink($image_path);
            }
            $request->file->move(public_path('uploads'), $fileName);
        }
        
        Article::where('id',$id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'image_path'=> (empty($fileName))? NULL: $fileName,
            'active' => $active
        ]);
        return redirect('article');
        //return Redirect::back()->withErrors($validator);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::where('id', $id)->first();
        if(!empty($article->image_path)){
            $image_path = public_path("uploads/" . $article->image_path);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        Article::destroy($id);
        return redirect('article');
    }
}
