<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Comment System Ajax | Brave Coder</title>
</head>
<body>
    <div class="wrapper">
        <form id="form">
            <div class="inputBox">
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" placeholder="Enter your name" required>
            </div>
            <div class="inputBox">
                <label for="msg">Message:</label>
                <br>
                <textarea id="msg" placeholder="Enter your message" required></textarea>
            </div>
            <button id="btn"> Send </button>
        </form>
        <hr>
        <div class="content" id="content">
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(function(){
            function loadData(){
                $.ajax({
                    url: 'select-data.php',
                    type: 'POST',
                    success: function(data){
                        $("#content").html(data);
                    }
                });
            }

            loadData();

            $("#btn").on("click", function(e){
                e.preventDefault();
                var name = $("#name").val();
                var msg = $("#msg").val();

                $.ajax({
                    url: 'insert-data.php',
                    type: 'POST',
                    data: {name: name, msg: msg},
                    success: function(data){
                        if (data == 1) {
                            loadData();
                            alert('Bình luận thành công.');
                            $("#form").trigger("reset");
                        }else {
                            alert("Bình luận thất bại.");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>