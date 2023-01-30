<?php

namespace App\Http\Controllers;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Contact;
use App\Number;
use DB;
class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "hello";
        //user (get)
        // $users = DB::table('contacts')->orderBy('name','asc')->get();
        // print_r($users);
        $users = Contact::all();
        $r1s = Number::all();
        return view("user.index",compact("users","r1s"));
        // return view("user.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view("user.add");
        //user/create (get)

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     private function store_contact( Contact $user,array $request){
        
        $user->name = $request['name'];
        // $user->mobile = $request->mobile;
        $user->email = $request['email'];
        $user->address = $request['address'];
        $user->company = $request['company'];
        $user->Birthday = $request['Birthday'];
        $user->links = $request['links'];
        $user->notes = $request['notes'];
        $user->save();



     }
     private function store_number($id,array $request ){
        

        $num1 = new Number();
        $data = [['st_id' => $id, 'mobile' => $request['mobile1']], ['st_id' => $id, 'mobile' => $request['mobile2']], ['st_id' => $id, 'mobile' => $request['mobile3']]];
        // $num1->st_id = $id;
        // $num1->mobile = $request->mobile1;
        // echo $data;
        $num1->insert($data);
       

        // if($request->mobile2!="")
        // {
        //     $num2 = new Number;
        //     $num2->st_id = $id;
        //     $num2->mobile = $request->mobile2;
        //     $num2->save();
        // }
        // if($request->mobile3!="")
        // {
        //     $num3 = new Number;
        //     $num3->st_id = $id;
        //     $num3->mobile = $request->mobile3;
        //     $num3->save();
        // }



     }

     public function store(UserStoreRequest $request)
    {
        // //user (post)
        // $data = [
        //     'name' => $request->name,
        //     'mobile' => $request->input('mobile'),
        //     'created_at' => date('Y-m-d H:i:s')
        // ];
        // // DB::table('contact')->insert($data);
       

        // $user2-> = $request->mobile1;
        // $user2->mobile2 = $request->mobile2;
        // $user2->mobile3 = $request->mobile3;
        // $user2->st_id = $request->st_id;
        // $user2->save();
        // return redirect('user');
        //print_r($data);
        //print_r($request->all());
        //
        $contact = new Contact();
        
       $this->store_contact($contact,$request->all());
       $this->store_number($contact->id,$request->all());
        return redirect("user");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //echo "$id";
        //user/id (get)
        // $users = DB::table('contact')->where('id','=',$id)->first();
        $users = Contact::where('id', $id)->with("number")->first();
        // dd($record);
        return view("user.show",compact("users"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Contact::where('id',$id)->with("number")->first();
        
        return view("user.edit",compact("users"));
        //user/id/edit (get)
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
        //user/id (put/patch)
        // $data = [
        //     'Name' => $request->name,
        //     'Mobile' => $request->mobile,
        // ];
        $data=[
        'name' => $request->name,
        // $user->mobile = $request->mobile;
        'email' => $request->email,
        'address' => $request->address,
        'company' => $request->company,
        'Birthday' => $request->Birthday,
        'links' => $request->links,
        'notes' => $request->notes,
        ];
        Contact::where('id',$id)->update($data);

        $num=['mobile'=> $request->mobile1];
        Number::where('st_id',$id)->update($num);

        $num=['mobile'=> $request->mobile2];
        Number::where('st_id',$id)->update($num);

        $num=['mobile'=> $request->mobile3];
        Number::where('st_id',$id)->update($num);
       // print_r($request->all());
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //user/id (DEELETE)
        // $user = Contact::find($id);
        // $user->delete();
        // return redirect('user');
    
        // Contact::where('id',$id)->delete();
        Number::where('st_id',$id)->delete();
        return redirect("user");
            # code...
        }
    public function bilal()
    {

        $var = Number::onlyTrashed()->get();
        return UserCollection::collection($var);

    }
    }

