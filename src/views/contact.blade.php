<!DOCTYPE html>
<html>
<head>
<title>Contact Form </title>
<style>
    .contactForm{
        align-content: center;
    }
    .contactForm .form-group{
        display: block;
        padding: 5px;
    }
    .contactForm .form-group label{
        display: block;
    }
    .contactForm .form-group .form-control{
        display: block;
        padding: 5px;
    }
</style>
</head>
<body>

    <form class="contactForm" method="post" action="{{route("contact")}}">
        @csrf
        <div class="form-group">
            <label>Full Name </label>
            <input class="form-control" placeholder="Full Name" type="text" name="fullname" value=""/>
        </div>
        <div class="form-group">
            <label>Email Address </label>
            <input class="form-control" placeholder="utdevnp@example.com" type="email" name="email" value=""/>
        </div>
        <div class="form-group">
            <label>Message </label>
           <textarea class="form-control" placeholder="Your message" name="message" rows="10" cols="30"></textarea>
        </div>
        <div class="form-group">
            <button class="form-control" type="submit"> Send </button>
        </div>
    </form>

</body>
</html>
