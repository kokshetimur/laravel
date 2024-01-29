<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\contactt;

class ContactController extends Controller
{
    public function submit (ContactRequest $req){
       $contact=new contactt();
       $contact->name=$req->input('name');
       $contact->email=$req->input('email');
       $contact->message=$req->input('message');

       $contact->save();

       return redirect('/about');
    }

    public function alldata(){
        $contact=new contactt();
      return view('messages',['data'=> $contact-> all()]);
    }

    public function oneMessage($id){
      $contact=new contactt();
      return view('one-message',['data'=> $contact-> find($id)]);

    }

    public function updateMessage ($id){
      $contact=new contactt();
      return view('update-message',['data'=> $contact-> find($id)]);
    }

    public function updateMessageSubmit ($id, ContactRequest $req){
      $contact=contactt::find($id);
      $contact->name=$req->input('name');
      $contact->email=$req->input('email');
      $contact->message=$req->input('message');

      $contact->save();

      return redirect('/home');
   }


   public function deleteMessage($id){
    contactt::find($id)->delete();

    return redirect('/home');
   }
}
