<!-- code lấy user -->
<?
if(!session_id()) session_start();

if(!isset($_SESSION["session_message"])){
//	session_register("session_message");
	$_SESSION["session_message"] = "";
}	

if(isset($_GET['page']))
$page = $_GET['page'];
if ($_REQUEST['act']=='logout') $_SESSION['log'] = $log;
if ($_SESSION['log']=='')
{
header("Location: /moshop");
}

?>

<!-- kết thúc code lấy user -->

<!-- code lấy dữ liệu -->


<?  

require("../system/model/config.php");
require("../system/model/common_start.php");
require("../system/model/function.php");
include("../system/inc/function.php");
include("box/admin_func.php");
include("visitor.php");

?>

<!-- kết thúc code lấy dữ liệu -->

<!-- code induc-->
<? include ("../news/news_func.php"); ?>
<?php 
$sql_user_mem=mysql_query("SELECT * FROM user_shop where user='".$_SESSION['log']."' ");
$row_user_mem=mysql_fetch_assoc($sql_user_mem);?>
<?
$sql_config=mysql_query("SELECT * FROM config_mem where user='".$_SESSION['log']."' ");
$row_config=mysql_fetch_assoc($sql_config);
$sql_menu_left=mysql_query("SELECT * FROM menu_left where user='".$_SESSION['log']."' ");
$row_menu_left=mysql_fetch_assoc($sql_menu_left);
$sql_popup=mysql_query("SELECT * FROM popup where user='".$_SESSION['log']."' ");
$row_popup=mysql_fetch_assoc($sql_popup);
?>
 

<!-- kết thúc code induc -->











<!DOCTYPE html>
<?if($row_user_mem['level_shop']=='0' or $row_user_mem['level_shop']=='3'){?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><? echo $row_user_mem['company'];?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- chuyển biến code -->
  <?php if($row_user_mem['domain']=='')
	{?>
<base href="http://shopcantho.vn/quantri/" />
<?}
elseif($_SERVER["SERVER_NAME"]=='shopcantho.vn')
		{?>
<base href="http://shopcantho.vn/quantri/" />
<?}else{?>
<base href="http://<? echo $row_user_mem['domain'];?>/quantri/" />
<?}?>
<!-- kết thúc chuyển biến code-->
<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
<!-- code conet-->
<script type="text/javascript" src="/filemanage/ckfinder/ckfinder.js"></script>
	<script type="text/javascript" >
	
	
	function BrowseServer()
{
	// You can use the "CKFinder" class to render CKFinder in a page:
	var finder = new CKFinder();
	finder.basePath = '../';	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.selectActionFunction = SetFileField;
	finder.popup();

	// It can also be done in a single line, calling the "static"
	// popup( basePath, width, height, selectFunction ) function:
	// CKFinder.popup( '../', null, null, SetFileField ) ;
	//
	// The "popup" function can also accept an object as the only argument.
	// CKFinder.popup( { basePath : '../', selectActionFunction : SetFileField } ) ;
}

// This is a sample function which is called when a file is selected in CKFinder.
function SetFileField( fileUrl )
{
	document.getElementById( 'imagefield1' ).value = fileUrl;
}
	
	
	</script>



    
<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			 
			
			$("#quanlyfile").fancybox({
				'width'				: '70%',
				'height'			: '70%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			$("#xemdonhang").fancybox({
				'width'				: '70%',
				'height'			: '70%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			
			$("#doimatkhau").fancybox({
				'width'				: '40%',
				'height'			: '50%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			 $("#dangkydichvu").fancybox({
				'width'				: '40%',
				'height'			: '50%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			$("#danhmuc").fancybox({
				'width'				: '40%',
				'height'			: '50%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			$("#dangkyquangcao").fancybox({
				'width'				: '60%',
				'height'			: '50%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

				$("#xembanner").fancybox({

				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			
				$("#xemnhanhsp").fancybox({

				'width'				: '1100px',
				'height'			: '1100px',
				'autoScale'			: true,
				'transitionIn'		: '11',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>




  

<script src="ckeditor/ckeditor.js"></script>
<!-- manager files -->
<script type="text/javascript" src="/filemanage/ckfinder/ckfinder.js"></script>
<script type="text/javascript">

function BrowseServer()
{
// You can use the "CKFinder" class to render CKFinder in a page:
var finder = new CKFinder();
finder.basePath = 'ckeditor/'; // The path for the installation of CKFinder (default = "/ckfinder/").
finder.selectActionFunction = SetFileField;
finder.popup();

}

// This is a sample function which is called when a file is selected in CKFinder.
function SetFileField( fileUrl )
{
document.getElementById( 'xFilePath' ).value = fileUrl;
}

</script>
<!-- end manager filies -->


 <link rel='stylesheet prefetch' href='css1/css.css'>



  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
   <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Theme style -->
  
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
   <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select21.min.css">
 
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Pace style -->
  <link rel="stylesheet" href="plugins/pace/pace.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini"  >





<div class="wrapper">





  
 
  <div class="content-wrapper" style="min-height: 480px;" >

<!-- action cũng là khai báo thời hạn -->




<div id="content">


<? if($_REQUEST['act']=='')
{?>
<?include("thongke.php");?>
<?} else {?>
<? include("box/frame.php");?>
<?}?>

</div>

<!-- kết thúc action cũng là khai báo thời hạn -->

</div>

  

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<!-- page script -->

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="JS/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<!-- PACE -->
<script src="plugins/pace/pace.min.js"></script>
<script>
<script type="text/javascript">
	// To make Pace works on Ajax calls
	$(document).ajaxStart(function() { Pace.restart(); });
    $('.ajax').click(function(){
        $.ajax({url: '#', success: function(result){
            $('.ajax-content').html('<hr>Ajax Request Completed !');
        }});
    });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
<!-- Add jQuery library -->

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	


</body>
</html>
<?}else{?>

 

<?}?>
<? require("../system/model/common_end.php") ?>




















