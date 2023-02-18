@extends('admin.layoutIN')

@section('admin')
<div class="regbody">
    <div class="container">
<h3>Update primary School Details  </h3>
@foreach($primaryinfo as $primo)
<form method="POST" class="row g-3"  action="{{route('adminupdatePrimary')}}">
    @csrf
    <div class="col-md-4">
        <label for="name" class="form-label">School-Code:</label>
        <input type="text" class="form-control" name="id"  value="{{$primo->id}}"  hidden>
        <input type="text" class="form-control" name="code" placeholder="Enter  school code " value="{{$primo->schoolCode}}"  >
      </div>
    <div class="col-md-4">
        <label for="name" class="form-label">Primary School Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter  School Name" value="{{$primo->primaryName}}">
    </div>
    <div class="col-md-4">
        <label for="county" class="form-label">County</label>
        <input type="text" class="form-control" name="county" placeholder="Enter County Name " value="{{$primo->county}}" >
    </div>
    <div class="col-md-6">
        <label for="subcounty" class="form-label">Sub-County:</label>
        <input type="text" class="form-control" name="subcounty" placeholder="Enter Sub-County " value="{{$primo->subCounty}}">
    </div>
    <div class="col-md-4">
        <label for="dob" class="form-label">Capacity:</label>
        <input type="text" class="form-control" name="capacity" placeholder="Enter  school Carrying capacity " value="{{$primo->capacity}}">
    </div>
    <div class="col-md-4">
        <label for="box" class="form-label">BOX:</label>
        <input type="text" class="form-control" name="box" placeholder="Enter BOX number" value="{{$primo->boxNumber}}">
    </div>
  
    <div class="col-md-12">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="Enter  school email " value="{{$primo->email}}">
    </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-success">Update Record</button>
            <a href="/adminshowusers"  class="btn btn-danger" style="float:right"> Back to Users </a>
        </div>
    </div>
</form>
@endforeach
</div>
</div>
@endsection
