<?php 

	$conexion=mysqli_connect('localhost','root','','proyecto');

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Formulario grupos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->
<link rel="stylesheet"href="../../plugins/fontawesome-free/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="AdminLTE.min.css">

</head>
<body>
  <!--Aqui comienzan los estilos-->

<style>
<style>
/*
 * Skin: Blue
 * ----------
 */
body {
  background-image: url('fondo.jpg');
  background-attachment: fixed;
  background-size: cover;
}

.skin-blue .main-header .navbar {
  background-color: #3c8dbc;
}
.skin-blue .main-header .navbar .nav > li > a {
  color: #ffffff;
}
.skin-blue .main-header .navbar .nav > li > a:hover,
.skin-blue .main-header .navbar .nav > li > a:active,
.skin-blue .main-header .navbar .nav > li > a:focus,
.skin-blue .main-header .navbar .nav .open > a,
.skin-blue .main-header .navbar .nav .open > a:hover,
.skin-blue .main-header .navbar .nav .open > a:focus {
  background: rgba(0, 0, 0, 0.1);
  color: #f6f6f6;
}
.skin-blue .main-header .navbar .navbar-custom-menu > .nav {
  margin-right: 10px;
}
.skin-blue .main-header .navbar .sidebar-toggle {
  color: #ffffff;
}
.skin-blue .main-header .navbar .sidebar-toggle:hover {
  color: #f6f6f6;
  background: rgba(0, 0, 0, 0.1);
}
.skin-blue .main-header .navbar .sidebar-toggle {
  color: #fff;
}
.skin-blue .main-header .navbar .sidebar-toggle:hover {
  background-color: #367fa9;
}
@media (max-width: 767px) {
  .skin-blue .main-header .navbar .dropdown-menu li.divider {
    background-color: rgba(255, 255, 255, 0.1);
  }
  .skin-blue .main-header .navbar .dropdown-menu li a {
    color: #fff;
  }
  .skin-blue .main-header .navbar .dropdown-menu li a:hover {
    background: #367fa9;
  }
}
.skin-blue .main-header .logo {
  background-color: #367fa9;
  color: #ffffff;
  border-bottom: 0px solid transparent;
}
.skin-blue .main-header .logo > a {
  color: #ffffff;
}
.skin-blue .main-header .logo:hover {
  background: #357ca5;
}
.skin-blue .main-header li.user-header {
  background-color: #3c8dbc;
}
.skin-blue .content-header {
  background: transparent;
}
.skin-blue .user-panel > .info,
.skin-blue .user-panel > .info > a {
  color: #fff;
}
.skin-blue .sidebar-menu > li.header {
  color: #4b646f;
  background: #1a2226;
}
.skin-blue .sidebar-menu > li > a {
  border-left: 3px solid transparent;
  margin-right: 1px;
}
.skin-blue .sidebar-menu > li > a:hover,
.skin-blue .sidebar-menu > li.active > a {
  color: #ffffff;
  background: #1e282c;
  border-left-color: #3c8dbc;
}
.skin-blue .sidebar-menu > li > .treeview-menu {
  margin: 0 1px;
  background: #2c3b41;
}
.skin-blue .wrapper,
.skin-blue .main-sidebar,
.skin-blue .left-side {
  background: #222d32;
}
.skin-blue .sidebar a {
  color: #b8c7ce;
}
.skin-blue .sidebar a:hover {
  text-decoration: none;
}
.skin-blue .treeview-menu > li > a {
  color: #8aa4af;
}
.skin-blue .treeview-menu > li.active > a,
.skin-blue .treeview-menu > li > a:hover {
  color: #ffffff;
}
.skin-blue .sidebar-form {
  border-radius: 3px;
  border: 1px solid #374850;
  margin: 10px 10px;
}
.skin-blue .sidebar-form input[type="text"],
.skin-blue .sidebar-form .btn {
  box-shadow: none;
  background-color: #374850;
  border: 1px solid transparent;
  height: 35px;
  -webkit-transition: all 0.3s cubic-bezier(0.32, 1.25, 0.375, 1.15);
  -o-transition: all 0.3s cubic-bezier(0.32, 1.25, 0.375, 1.15);
  transition: all 0.3s cubic-bezier(0.32, 1.25, 0.375, 1.15);
}
.skin-blue .sidebar-form input[type="text"] {
  color: #666;
  border-top-left-radius: 2px !important;
  border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
  border-bottom-left-radius: 2px !important;
}
.skin-blue .sidebar-form input[type="text"]:focus,
.skin-blue .sidebar-form input[type="text"]:focus + .input-group-btn .btn {
  background-color: #fff;
  color: #666;
}
.skin-blue .sidebar-form input[type="text"]:focus + .input-group-btn .btn {
  border-left-color: #fff;
}
.skin-blue .sidebar-form .btn {
  color: #999;
  border-top-left-radius: 0 !important;
  border-top-right-radius: 2px !important;
  border-bottom-right-radius: 2px !important;
  border-bottom-left-radius: 0 !important;
}
.skin-blue.layout-top-nav .main-header > .logo {
  background-color: #3c8dbc;
  color: #ffffff;
  border-bottom: 0px solid transparent;
}
.skin-blue.layout-top-nav .main-header > .logo > a {
  color: #ffffff;
}
.skin-blue.layout-top-nav .main-header > .logo:hover {
  background: #3b8ab8;
}

</style>
<!--Aqui acaban los estilos-->
<!--Aqui comienza el navbar-->
<body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="index.php" class="logo"><b>Control</b>UPV</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            </ul>
          </div>
        </nav>
        </header>
        <!--Aqui termina el navbar-->

<!--Aqui comienza la tabla-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lista</title>
        <link rel="stylesheet" href="tabla.css">
    </head>
<body>
<br>
<div id="main-container">
	<table border="1" >
		<thead>
			<td>Nombre</td>
            <td>Clave</td>
			<td>Modificar</td>
			<td>Eliminar
        </thead>

		<?php 
	
		$result=mysqli_query($conexion,"SELECT * from grupos");

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombres'] ?></td>
            <td><?php echo $mostrar['grupos'] ?></td>
			<td><a href="editarGRUPOS.php?id=<?php echo urlencode($mostrar['id']);?>"><img src="https://i.ibb.co/KN50dsp/edicionado.jpg" alt="edicionado" border="0"></a></td>
			<td><a href="eliminarGRUPOS.php?id=<?php echo urlencode($mostrar['id']);?>"><img src="https://i.ibb.co/VB3Rhf1/DELETEXD.jpg" alt="DELETEXD" border="0"></a></a></td>
		</tr>
	<?php 
	}
	 ?>
  </table>
  <!--Aqui termina la tabla-->
</div>
</body>
</html>