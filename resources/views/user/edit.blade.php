<!DOCTYPE html>
<html>
<body>
<h2 style="color:DodgerBlue;">UPDATE YOUR RECORD</h2>
</body>
@foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
<form method="post" action="{{url('user',$users->id)}}">
    <input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
    <?php
    $i=0;
    ?>
    @foreach($users as $record)
    <?php $n1[$i++]=$record; ?>
    @endforeach
    name:  <span>&#8203;</span> <span>&#8203;</span>  <input type="varchar" name="name" value="{{$users->name}}"><br>

    mobile1: <input type="bigint" name="mobile1" value="{{$users->mobile1}}"><br>
    mobile2: <input type="bigint" name="mobile2" value="{{$users->mobile2}}"><br>
    mobile3: <input type="bigint" name="mobile3" value="{{$users->mobile3}}"><br>
    email: <input type="varchar" name="email" value="{{$users->email}}"><br>
    address: <input type="varchar" name="address" value="{{$users->address}}"><br>
    company: <input type="varchar" name="company" value="{{$users->company}}"><br>
    Birthday: <input type="varchar" name="Birthday" value="{{$users->Birthday}}"><br>
    links: <input type="varchar" name="links" value="{{$users->links}}"><br>
    notes: <input type="varchar" name="notes" value="{{$users->notes}}"><br>
    <input type="submit" name="submit" value="update record">
</form>    
