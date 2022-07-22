<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="{{url('css/app.css')}}}">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">


                <h4>Contact Us</h4>
                <p>Have any question or feedback?</p>

                @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif

                <form action="" method="post">

                    {{ csrf_field() }}

                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="you name" />
                    
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="you email address" />
                    
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>

                    <br><br>

                    <button class="btn btn-success btn-block">Send</button>
                <form>
            </div>
        </div>
    </div>	
</body>
</html>
