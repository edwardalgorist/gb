<?php

namespace App\Http\Controllers;
use App\Http\Requests\CommentRequest;
use App\Models\Comments;

class IndexController extends Controller {

    public function index() {

        return view('index');

    }

    public function store(CommentRequest $request) {

        $comments = new Comments();
        $comments->name = $request->get('name');
        $comments->comment = $request->get('comment');
        $comments->save();
        return view('index');

    }
}
