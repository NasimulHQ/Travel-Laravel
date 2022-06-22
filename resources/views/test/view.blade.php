<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-4">
                <h3 class="text-center text-primary">Find Github repos by username</h3>
                <form id="userForm" method="post">
                    <input type="text" class="form-control" name="username" placeholder="Enter gitHub User name">
                    <button type="submit" class="btn btn-primary mt-2">Search</button>
                </form>
            </div>
            <div class="col-12 mt-3">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Repo name</th>
                            <th>Repo username</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    </script>
    <script>
        $( "#userForm" ).submit(function( event ) {
        event.preventDefault();
        var $form = $( this ),
            username = $form.find( "input[name='username']" ).val(),
            url = "https://api.github.com/users/"+username+"/repos";
            // url = "/gallery";
            
        $.ajax({
            type: "GET",
            url: url,
            dataType:"json",
            success: function(response){
                let table_body = "";
                response.forEach(item=>{
                    table_body += `<tr><td>${item.name}</td><td>${item.full_name}</td><td>${item.html_url}</td><tr>`;
                });
                $("tbody").empty().append(table_body);
            }
        });
        
        });
    </script>
</body>

</html>