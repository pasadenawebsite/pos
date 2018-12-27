
<body class="signin-up-bg">

    <div class="leftHalf" style="background-image: url('assets/img/login-bg.jpg')">
        <div class="login-promo-txt">
            <h2>Let's Start The Journey</h2>
            <p>Enter the most beautiful admin ever</p>
        </div>
    </div>

    <div class="rightHalf">
        <div class="position-relative">
            <!--login form-->
            <div class="login-form">
                <h2 class="text-center mb-4">
                    <img src="assets/img/logo.png" srcset="assets/img/logo@2x.jpg 2x" alt="CodeLab">
                </h2>
                <h4 class="text-uppercase- text-purple text-center mb-5">Login to Admin</h4>
                 <?php
session_start();
/* CandralabGIS v 1.0
 * @author Candra adi putra 
 *  <candraadiputra@gmail.com>
 * http://www.candra.web.id
 * last edit: 27 Oktober 2013
 */
if (isset($_POST['login'])) {
$username = $_POST['username'];
$password = md5(trim($_POST['password']));
$sql = "select  * from  users  where username='$username'
  and password='$password' ";

$sql_login = mysqli_query($koneksi, $sql) or die(mysqli_error());
$hasil = mysqli_fetch_array($sql_login);

if(mysqli_num_rows($sql_login) == 1) {
	$_SESSION['username'] = $hasil['username'];
	$_SESSION['level'] = $hasil['level'];
	$_SESSION['nama_lengkap'] = $hasil['nama_lengkap'];
$_SESSION['jobdesk'] = $hasil['jobdesk'];
	header("Location:index.php?page=home");

} else {
	header("Location:index.php?page=login");
}
}
?>
                <form action="" method="post" name="login">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter Username">
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                    </div>

                    <div class="form-group clearfix">
<button type="submit" class="btn btn-purple btn-pill float-right" value="login" name="login">LOGIN</button>
                    </div>


                </form>
            </div>
            <!--/login form-->
        </div>
    </div>