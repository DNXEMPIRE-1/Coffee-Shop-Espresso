<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>       
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/styles.css?v=1" />
    <style type="text/css">
    #todoList li {cursor: pointer;}
    </style>

  <script type="text/javascript">
        $(document).ready(function () {

            $("#add-todo-button").click(function () {

                todo = $("#todo").val();
               
              
                $.ajax({
                    type: "POST",
                    url: "todo_con.php",
                    data: "&todo=" + todo,
                    success: function (html) {
                        if (html == 'true') { 

                            console.log(true);

                        }  else {
                            console.log(html);
                    }
                  },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>




</head>
<body>
<div class="boxy">
<!--     <div class="container"> -->

       

        <form class="form-inline" role="form">
            <div class="form-group">
                <input type="text" class="form-control" id="todo" placeholder="Add todo">
            </div>
            <!-- <input type="submit" class="btn btn-primary" id="add-todo-button" value="Add"> -->
            <button class="btn btn-primary" id="add-todo-button">ADD</button>
        </form>

        <br>

    <div class="well"><h4>Todo</h4><ul id="todoList" class="listarea"></ul></div>
        <br>
       <div class="well"><h4>Done</h4><ul id="doneList" class="listarea"></ul></div>
</div>

    <!-- ./container -->
    <script type="text/javascript">
    $('#add-todo-button').click( function( e ) {
        var todo = $('#todo');
        if(todo.val()) {
            $('#todoList').append("<li title='Click to finish todo'>" + todo.val() + "</li>");
            $('#todo').val("").focus();
        }
        e.preventDefault();
    });

    $('#todo').keypress(function(e){
        if (e.keyCode === 13) {
            $('#add-todo-button').click();
        }
    });

    $('#todoList').click(function( e ){
        if(e.target.nodeName === 'LI') {
            var doneTodo = e.target;
            doneTodo.title = "";
            // add to doneList
            $("#doneList").append(doneTodo);
        }
    });
    </script>
</body>
</html>