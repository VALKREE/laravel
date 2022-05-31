<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\CreateRequest;
use App\Models\FeedbackForm;
use App\Queries\QueryBuilderFeedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(QueryBuilderFeedback $feedback)
    {
        return view('feedback.index', [
            'feedback' => $feedback->getFeedback()
        ]);
    }

    public function store(CreateRequest $request)
    {
        $feedback = new FeedbackForm();
        $feedback->name = $request->name;
        $feedback->comment = $request->comment;
        $feedback->save();
        return redirect('feedback')->with('success', 'Успех!');
    }
}
