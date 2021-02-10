<?php

namespace App\Http\Controllers;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'asc')->get();
        return view('guestbook', ['comments'=>$comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        $this->validate($request, [
    'message' => 'required|min:5|max:999',
    ]);
        if(\Auth::user()==null)
        {
            return view('guestbook');
        }
        $comment = new Comment();
        $comment->user_id = \Auth::user()->id;
        $comment->messagecategory = $request->reason;
        $comment->message = $request->message;
        if($comment->save()) {
        $comments = Comment::orderBy('created_at', 'asc')->get();
        return view('guestbook', ['comments'=>$comments]);
        }
        $comments = Comment::orderBy('created_at', 'asc')->get();
        return view('guestbook', ['comments'=>$comments]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
$comment = Comment::find($id);
 //Sprawdzenie czy użytkownik jest autorem komentarza
 if (\Auth::user()->id != $comment->user_id) {
 return back()->with(['success' => false, 'message_type' => 'danger',
 'message' => 'Nie posiadasz uprawnień do przeprowadzenia tej operacji.']);
 }
 return view('guestbookEditForm', ['comment'=>$comment]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
 //Sprawdzenie czy użytkownik jest autorem komentarza
 if(\Auth::user()->id != $comment->user_id)
 {
 return back()->with(['success' => false, 'message_type' => 'danger',
 'message' => 'Nie posiadasz uprawnień do przeprowadzenia tej operacji.']);
 }
 $comment->message = $request->message;
 if($comment->save()) {
 return redirect()->route('guestbook');
 }
 return "Wystąpił błąd.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $comment = Comment::find($id);
 //Sprawdzenie czy użytkownik jest autorem komentarza
 if(\Auth::user()->id != $comment->user_id)
 {
 return back()->with(['success' => false, 'message_type' => 'danger',
 'message' => 'Nie posiadasz uprawnień do przeprowadzenia tej operacji.']);
 }
 if($comment->delete()){
 return redirect()->route('guestbook')->with(['success' => true,
 'message_type' => 'success',
 'message' => 'Pomyślnie skasowano komentarz użytkownika '.
 $comment->user->name.'.']);
 }
 return back()->with(['success' => false, 'message_type' => 'danger',
 'message' => 'Wystąpił błąd podczas kasowania komentarza użytkownika '.
 $comment->user->name.'. Spróbuj później.']);
    }
}
