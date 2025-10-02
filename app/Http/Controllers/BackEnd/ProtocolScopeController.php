<?php

namespace App\Http\Controllers\Backend;

use App\Choice;
use App\ProtocolScope;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\ProtocolChart;
use App\Question;
use App\SubCategory;
use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class ProtocolScopeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = ProtocolScope::latest()->paginate(10);

        return view('backend.protocolscope.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getcategories = SubCategory::get();

        return view('backend.protocolscope.create' , compact('getcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $requestArray = $request->all();

        ProtocolScope::create($requestArray);

        Session::flash('flash_message', 'Protocol Scope added successfully!');
        return redirect()->route('protocolscope.index');
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
        $row = ProtocolScope::findorFail($id);
        $getcategories = SubCategory::get();

        return view('backend.protocolscope.edit', compact('row' , 'getcategories'));
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
        $client = ProtocolScope::findorFail($id);

        

        $requestArray = $request->all();

        $client->update($requestArray);

        Session::flash('flash_message', 'Protocol Scope updated successfully!');
        return redirect()->route('protocolscope.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $client = ProtocolScope::findorFail($id);
        
        
        $client->update([
            'active_status' => 0
            ]);

        Session::flash('flash_message', 'Protocol Scope Disabled successfully!');
        return redirect()->route('protocolscope.index');
    }

    public function recover($id)
    {

        $client = ProtocolScope::findorFail($id);
        $client->update([
            'active_status' => 1
            ]);

        Session::flash('flash_message', 'Protocol Scope Recover successfully!');
        return redirect()->route('protocolscope.index');
    }

    public function protocolquestions($id) {
        $protocol = ProtocolScope::where('id' , $id)->get()->first();
        $rows = Question::where('protocol_scope_id' , $id)->get();

        return view('backend.protocolscope.getquestions', compact('protocol' , 'rows'));

    } 

    public function  createprotocolquestion($id) {
        $protocol = ProtocolScope::where('id' , $id)->get()->first();
        return view('backend.protocolscope.createquestion', compact('protocol'));
    }

    public function  editprotocolquestion($id) {
        $row = Question::where('id' , $id)->get()->first();
        return view('backend.protocolscope.editquestion', compact('row'));
    }

    public function storequestion(Request $request) {
        $protocol = ProtocolScope::where('id' , $request->protocol_id)->get()->first();
        $numberofchoises = $request->type;

        $question = Question::create([
            'title' => $request->title,
            'description' => $request->description,
            'text' => $request->text,
            'protocol_scope_id' => $request->protocol_id,
            'danger_status' => $request->danger_status,
            'danger_timer' => $request->danger_timer,
        ]);

        for ($i=0; $i < $numberofchoises; $i++) { 
            # code...
            $choises = Choice::create([
                'question_id' => $question->id,
                'protocol_scope_id' => $request->protocol_id,
            ]);
        }
        
        return redirect()->route('protocolchoices' , $question->id);

    }

    public function updateprotocolquestion($id , Request $request) {
        $row = Question::where('id' , $id)->get()->first();
        $row->update([
            'title' => $request->title,
            'description' => $request->description,
            'text' => $request->text,
            'danger_status' => $request->danger_status,
            'danger_timer' => $request->danger_timer,
        ]);

        Session::flash('flash_message', 'Protocol Quesion Updated successfully!');
        return redirect()->route('protocolquestions' , $row->protocol_scope_id);
    }

    


    public function protocolchoices($id) {
        $protocol = Question::where('id' , $id)->get()->first();
        $rows = Choice::where('question_id' , $id)->get();

        return view('backend.protocolscope.getchoices', compact('protocol' , 'rows'));

    } 

    public function  editprotocolchoice($id) {
        $row = Choice::where('id' , $id)->get()->first();
        $protocol = ProtocolScope::where('id' , $row->protocol_scope_id)->get()->first();
        return view('backend.protocolscope.editchoice', compact('row' , 'protocol'));
    }

    public function updateprotocolchoice($id , Request $request) {
        $row = Choice::where('id' , $id)->get()->first();
        if($request->title) {
            
            $numberofchoises = $request->type;

            $question = Question::create([
                'title' => $request->title,
                'description' => $request->description,
                'text' => $request->text,
                'protocol_scope_id' => $row->protocol_scope_id,
                'danger_status' => $request->danger_status,
                'danger_timer' => $request->danger_timer,
            ]);
    
            for ($i=0; $i < $numberofchoises; $i++) { 
                # code...
                $choises = Choice::create([
                    'question_id' => $question->id,
                    'protocol_scope_id' => $row->protocol_scope_id,
                ]);
            }
            
            $row->update([
                'text' => $request->textvalue,
                'next_question_id' => $question->id,
            ]);
            
        } else {
            $row->update([
                'text' => $request->textvalue,
            ]);
        }


        Session::flash('flash_message', 'Choise  Updated successfully!');
        return redirect()->route('protocolchoices' , $row->question_id);
        
    }
    
    
    
    
    public function protocoldigram($id) {
        $protocol = Question::where('id'  , $id)->get()->first();
        $digrams = ProtocolChart::where('question_id' , $id)->get();

        return view('backend.protocolscope.digramindex', compact('protocol' , 'digrams'));

    }

    public function protocolcreatedigram($id , Request $request) {
        $protocol = Question::where('id'  , $id)->get()->first();

        return view('backend.protocolscope.digramcreate', compact('protocol'));
    }

    public function protocolstoredigram(Request $request) {
        $question = Question::where('id' , $request->question_id)->get()->first();
        $protocol = ProtocolScope::where('id'  , $question->protocol_scope_id)->get()->first();

        ProtocolChart::create([
            'title' => $request->title,
            'protocol_scope_id' => $protocol->id,
            'protocol_scope_name' => $protocol->title,
            'sub_category_id' => $protocol->sub_category_id,
            'sub_category_name' => $protocol->subcategory->title,
            'question_id' => $question->id,
            'question_title' => $question->text,
        ]);

        Session::flash('flash_message', 'Chart Updated successfully!');
        return redirect()->route('protocoldigram' , $question->id);
    }

    public function protocoleditdigram($id , Request $request) {
        $protocoldigram = ProtocolChart::where('id'  , $id)->get()->first();

        return view('backend.protocolscope.digramedit', compact('protocoldigram'));
    }

    public function protocolupdatedigram($id , Request $request) {
        $protocoldigram = ProtocolChart::where('id'  , $id)->get()->first();

        $protocoldigram->update([
            'title' => $request->title,
        ]);

        Session::flash('flash_message', 'Chart Updated successfully!');
        return redirect()->route('protocoldigram' , $protocoldigram->question_id);
    }
}
