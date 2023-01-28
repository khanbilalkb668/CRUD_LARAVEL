<!DOCTYPE html>
<html>
<body>
<h2 style="color:DodgerBlue;">CUSTOMER DETAILS</h2>

{{-- echo "$users->name"; 
echo "$record->mobile"; --}}

</body>
</html>
<br>
@foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
  <br>
name:{{$users->name}}
<br>
<?php $n=1; ?>
@foreach($users->number as $record)
   {{$n++}}.
   {{$record->mobile}} <br>    
@endforeach
<br> 

email:{{$users->email}}
<br>
address:{{$users->address}}
<br>
company:{{$users->company}}
<br>
Birthday:{{$users->Birthday}}
<br>
links:{{$users->links}}
<br>
notes:{{$users->notes}}


  