<html>
<head>
    <title>Registrasi Acara Pusat Karir</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type=text/javascript>
function check_login(){
    var form = document.forms["login_form"];
    if(form.nama.value=="" || form.pass.value==""){
        alert("Username / Password tidak Boleh Kosong");
        return false;
    }
    else if (form.nama.value!="admin" || form.pass.value!="admin"){
        alert("Username / Password Salah");
        return false;
    }
    else if (form.nama.value=="admin" && form.pass.value=="admin"){
        alert("Login Sukses");
        return true;
    }
}
</script>
<style>
    .login_form_class{
        padding-left: 40%;
        padding-top:20%;
    }
    .button_submit{
        margin-left: 15%;
        
    }
</style>
</head>
<body>
    <form method="post" action="home.php" onsubmit="return check_login()" name="login_form" enctype="multipart/form-data" class="login_form_class">
    Username : <input type="text" name="nama"><br><br>
    Password : <input type="password" name="pass"><br>
    <br>
    <input type="submit" name="submit" value ="Login" class="button_submit">
    </form>
</body>
</html>
