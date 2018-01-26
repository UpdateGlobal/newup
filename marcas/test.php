<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/> 
<link rel="stylesheet" type="text/css" href="css/animate.css">  



</head>
<body>

  <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse btn"><i class="material-icons">menu</i></a>
        




<script type="text/javascript" src="js/materialize.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function() {
        $(".button-collapse").sideNav();
      });
    </script>

</body>
</html>