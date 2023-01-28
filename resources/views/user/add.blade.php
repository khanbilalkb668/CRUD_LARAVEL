<!DOCTYPE html>
<html>
<body>
<h2 style="color:DodgerBlue;">ADD NEW CONTACT</h2>
</body>
@foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
<form method="post" action="{{url('user')}}">
name:<input type="varchar" name="name"><br>
<br>
mobile1:<input type="bigint" name="mobile1"><br>
<br> 
mobile2:<input type="bigint" name="mobile2"><br>
<br> 
mobile3:<input type="bigint" name="mobile3"><br>
<br> 
email:<input type="varchar" name="email"><br>
<br>
address:<input type="varchar" name="address"><br>
<br>
company:<input type="varchar" name="company"><br>
<br>
Birthday:<input type="varchar" name="Birthday"><br>
<br>
links:<input type="varchar" name="links"><br>
<br>
notes:<input type="varchar" name="notes"><br>
{{csrf_field()}}
<br>
<input type="submit" name="save">

</form>