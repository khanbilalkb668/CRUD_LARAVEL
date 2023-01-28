<!DOCTYPE html>
<body>
{{-- <img src="file:///C:/Users/nc/Desktop/download.png"> --}}
<h2 style="color:DodgerBlue;">WELCOME TO PHONEBOOK</h2>


<a href="{{url('user/create')}}" style="color:MediumSeaGreen;"><h3>Add New Contact</h3></a>

<table border="1" cellspacing="4" cellspacing="4">
<tr>
    <th>S-No</th>
    <th>name</th>
    {{-- <th>mobile1</th>
    <th>mobile2</th>
    <th>mobile3</th> --}}
    <th>email</th>
    <th>address</th>
    <th>company</th>
    <th>Birthday</th>
    <th>links</th>
    <th>notes</th>
    <th>Action</th>

</tr>
<?php $x=1 ?>
@foreach($users as $user)
<tr>
    <td>{{$x++}}</td>
    <td>{{$user->name}}</td>
     {{-- <td face="verdana"
          color="green;">{{$user->mobile}}</td> 
          <td face="verdana"
          color="green;">{{$user->mobile}}</td> 
          <td face="verdana"
          color="green;">{{$user->mobile}}</td>  --}}
          <td>{{$user->email}}</td>
          <td>{{$user->address}}</td>
          <td>{{$user->company}}</td>
          <td>{{$user->Birthday}}</td>
          <td>{{$user->links}}</td>
          <td>{{$user->notes}}</td>
    <td><a href="{{url('user',$user->id)}}">View</a>/
    <a href="{{url('user',[$user->id,'edit'])}}">Edit</a>/
    <form method="POST" action="{{url('user',$user->id)}}" style="padding: 10px">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" name="submit" value="Delete">
     </form>
    </td>
</tr>
@endforeach

</table>
</body>
</html>