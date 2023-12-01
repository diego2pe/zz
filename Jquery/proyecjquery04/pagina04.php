<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery/jquery.js"></script>
    <title>Jquery</title>

    <script>
        $(document).ready(function()
        {
            $("#cbonumeros").change(function()
            {
                var dato=$("#cbonumeros").val();
                alert(dato);
            });
        });
    </script>
</head>
<body>
<center>
    <select id="cbonumeros">
        <option value="0" selected>------</option>
        <option value="uno"       >Uno</option>
        <option value="dos"       >Dos</option>
    </select>
</center>
</body>
</html>