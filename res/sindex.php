<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Group</title>
</head>
<body>
    <form>
        <input id="a_code" type="text" placeholder="Access Code" name="a_code">
        <input id="sub" type="submit" value="Login" name="submit">
    </form>
    <script>
        document.getElementById('sub').addEventListener('click', e => {
            e.preventDefault();
            let http = new XMLHttpRequest();
            let url = 'groupindex.php';
            let params = `a_code=${document.getElementById("a_code").value}`;
            http.open('POST', url, true);
            http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            http.onreadystatechange = function() {
                if(http.readyState == 4 && http.status == 200) {
                    console.log(this.responseText);
                }
            }
            http.send(params);            
        })
    </script>
</body>
</html>