
Reference Url : http://www.mostlikers.com/2014/02/php-menu-submenu.html

<style type="text/css" media="screen">
#horizontalmenu ul {
padding:1; margin:1; list-style:none;
}
#horizontalmenu li {
float:left; position:relative; padding-right:100; display:block;
border:4px solid #CC55FF; 
border-style:inset;
}
#horizontalmenu li ul {
    display:none;
position:absolute;
}
#horizontalmenu li:hover ul{
    display:block;
    background:red;
height:auto; width:8em; 
}
#horizontalmenu li ul li{
    clear:both;
border-style:none;}
</style>
</head>
<body>

 

<div id="horizontalmenu">
<?php
include "Unmock_Admin/dbconnect1.php";
$mainmenu=mysqli_query($con,"select * from menu");
while($sss=mysqli_fetch_array($mainmenu))
{
    $menu=$sss['menu'];
    $menu1=$sss['id'];
?>
        <ul> <li><a href="#"><?php echo $menu; ?></a>
        <?php
    
    $select2=mysqli_query($con,"select * from submenu where menuid='$menu1'");
    if(mysqli_num_rows($select2)=="")    {       
    }
    else
    {   ?>
      <ul>
    <?php
      while($menu2=mysqli_fetch_array($select2))
      {?>
      <li><a href="#"><?php echo $menu2['submenu'];?></a></li>
      <?php  } ?>
      </ul>
      <?php  } ?>
      </li>
          <?php } ?>
      
  </ul></div>
</body>
</html>