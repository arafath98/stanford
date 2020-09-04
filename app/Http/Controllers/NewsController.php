<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

use Session;

class NewsController extends Controller
{
    public function showCreateNewsPage(){
        $page_title = 'Create News';

        return view('backend.news.createNews', \get_defined_vars());
    }

    public function showManageNewsPage(){
        $page_title = 'Manage News';
        $news = News::get();

        return view('backend.news.manageNews', \get_defined_vars());
    }

    public function saveNews(Request $request){
        $this->validate($request,[
            'topic' => 'required|min:2|max:255',
            'title' => 'required|min:5|max:255',
            'image' => 'required',
        ]);
    
        $news = new News();
        $news->topic = $request->topic;
        $news->title = $request->title;
        $news->image = $request->image;
        $news->save();

        Session::flash('success', 'News added successfullly');

        return redirect() -> route('admin.news.manage');
    }

    public function showEditNewsPage($id){
        $page_title = 'Edit News';
        $news = News::find($id);

        return view('backend.news.editNews', \get_defined_vars());
    }

    public function updateEdit(Request $request){
        $this->validate($request,[
            'topic' => 'required|min:2|max:255',
            'title' => 'required|min:5|max:255',
            'image' => 'required',
        ]);

        $news = News::find($request->news_id);

        $news->topic = $request->topic;
        $news->title = $request->title;
        $news->image = $request->image;

        $news->update();

        Session::flash('success', 'The news has been updated successfullly');
 
        return redirect()->route('admin.news.manage');
    }

    public function deleteNews($id){
        $news =  News::find($id);
        $news->delete();

        Session::flash('success', 'Information has been deleted successfullly');

        return redirect()->route('admin.news.manage');
    }

}
