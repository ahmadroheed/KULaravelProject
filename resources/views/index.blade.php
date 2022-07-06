<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ----------><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">

<div class="container-fluid">
@include('sweetalert::alert')

    <form method="post" action="/save">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail4">Student Name</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="name">
            </div>
            <div class="form-group col-md-12">
                <label for="inputPassword4">Student Father's Name</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Father's Name" name="fname">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Password</label>
            <input type="password" class="form-control" id="inputAddress" placeholder="password" name="password">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Email</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Email" name="email">
        </div>
        <button type="submit" class="btn btn-primary float-right">Create Student</button>
    </form>
</div>