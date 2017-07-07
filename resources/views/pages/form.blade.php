<ul>
@foreach($errors->all() as $error)
 <li> {{ $error }} </li>
@endforeach
</ul>
<form class="form-horizontal" method="post" action="/AddData">
  {{ csrf_field() }} 
  <div class="form-group">
    <label class="control-label col-sm-2">First Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fname" name="fname"  placeholder="First Name">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Last Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="lname" placeholder="Last Name">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Email:</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Phone Number:</label>
    <div class="col-sm-10"> 
      <input type="number" class="form-control" name="number" placeholder="Phone">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">Company Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="cname" placeholder="Company Name">
    </div>
  </div>

    <div class="form-group">
    <label class="control-label col-sm-2">Industry:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="industry" placeholder="Human Resource Services">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">Province:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="province" placeholder="Ontario">
    </div>
  </div>

     <div class="form-group">
    <label class="control-label col-sm-2">Request Details:</label>
    <div class="col-sm-10"> 
      <Textarea name="details"></Textarea>
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit" value="submit">Submit Request</button>
    </div>
  </div>
</form>