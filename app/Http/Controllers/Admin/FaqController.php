<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $faq_categories = FaqCategory::all();
        $faqs = Faq::with('category')->orderBy('id', 'desc');
        
        if ($request->search_value != null){
            $faqs = $faqs->where('question', 'like', '%'.$request->search_value.'%');
        }

        if ($request->status != null){
            $faqs = $faqs->where('status', $request->status);
        }

        if ($request->category_id != null){
            $faqs = $faqs->where('category_id', $request->category_id);
        }

        $faqs = $faqs->paginate(15);

        return view('admin.faqs.index', compact('faqs', 'faq_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $faq_categories = FaqCategory::all();
        $faq = new Faq;
        return view('admin.faqs.create', compact('faq_categories', 'faq'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->status = $request->status;
        $faq->category_id = $request->category_id;
        $faq->save();

        flash('FAQ has been created successfully')->success();
        return redirect()->route('admin.faqs.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faq_categories = FaqCategory::all();
        $faq = Faq::with('category')->findOrFail($id);
        return view('admin.faqs.edit', compact('faq_categories', 'faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->status = $request->status;
        $faq->category_id = $request->category_id;
        
        $faq->save();

        flash('FAQ has been updated successfully')->success();
        return redirect()->route('admin.faqs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Faq::where('id', $id)->delete();

        flash('FAQ has been deleted successfully')->success();
        return redirect()->back();  
    }
}
