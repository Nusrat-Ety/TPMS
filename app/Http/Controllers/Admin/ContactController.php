<?php

namespace App\Http\Controllers\Admin;
use App\Models\Query;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function querylist(){
$query=Query::with('user')->get();
return view('admin.layouts.contact.querylist',compact('query'));
  }
  public function ViewqueryReply($query_id){
    $query=Query::find($query_id);
    return view('admin.layouts.contact.queryReplyView',compact('query'));

}
  public function queryReply(Request $request,$query_id){
    $query=Query::find($query_id);
    $query->update([
        'reply'=>$request->reply,
        'status'=>'replied'

       ]);
       return redirect()->route('admin.query.list')->with('success','reply has been sent.');
      }
}
