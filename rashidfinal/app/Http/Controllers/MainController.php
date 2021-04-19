<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;


class MainController extends Controller{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('abaout');
    }
    public function contact(){
        // return view('contact');
            $contacts =new Contact();
            // dd($contacts->all());
        return view('contact',['contacts'=>$contacts->all()]); // передаем полученные объекты во внутрь шаблона передаем
    
    }
    
    public function contact_check(Request $request){
    
        $valid = $request->validate([
            'firstName'=>'required|min:4|max:100',
            'lastName'=>'required|min:4|max:100',
            'email'=>'required|min:4|max:100',
            'message'=>'required|min:10|max:500',
        ]);
        $contact= new Contact();  //получаю значениия из формы
        $contact->firstName = $request->input('firstName');
        $contact->lastName = $request->input('lastName');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save(); //создаем новую запись

         return redirect()->route('contact'); //переодресация на страницу
}
}
