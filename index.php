<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery Ajax PHP</title>
</head>
<body>
    
    <form action="#" id="form">
        <label for="fullname">Fullname:</label>
        <br>
        <input type="text" name="fullname" id="fullname">
        <br>
        <label for="email">Email:</label>
        <br>
        <input type="email" name="email" id="email">
        <br>
        <label for="Message">Message:</label>
        <br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        <input type="button" name="button" id="button" value="Send">

    </form>


    <div class="mydiv">

    </div>


<!-- jQuery CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- jquery ajax -->
<script>
    $(document).ready(function(){
        $('#button').on('click', function(){
            var form = $('#form').serialize();
            var fullName = $('#fullname').val();
            var email = $('#email').val();
            var message = $('#message').val();
            var formData = 'fullname='+fullName+'&email='+email+'&message='+message;


            $.ajax({
                url: 'ajax.php',
                type: 'POST',
                data: formData,
                success : function(data){
                    $('.mydiv').html(data);
                }
            });
        });
    });
</script>
</body>
</html>