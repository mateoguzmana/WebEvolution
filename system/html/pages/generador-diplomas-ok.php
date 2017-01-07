
<?
session_start(); 

include("../../includes/conexion.php");

$horaactual 			= date("Y-m-d H:i:s");
$fechahoy 				= date("Y-m-d");

$Nombre           =$_REQUEST["Nombre"];
$Nombre=utf8_decode($Nombre);

?>
<style>
table {
text-align:justify;
}
td {
text-align:justify;
}
#Principal{
margin: 0 auto;
background-image: url(https://s-media-cache-ak0.pinimg.com/736x/d2/aa/69/d2aa69dc39103f4a5a907babd1b1a4c2.jpg);
background-position: fixed;
background-repeat: no-repeat;
background-size: 100px 80px;
}
</style>
<page backtop="0mm" backbottom="0mm" backleft="4mm" backright="4mm">
<table id="Principal" width="2000">
  <tr>
    <td>
      <table style="margin-top:50px;" width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr style="text-align:center;font-size:55px;color:#848484;"><td>&nbsp;</td></tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
      <table style="margin-top:0px;" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr style="text-align:center;font-size:55px;color:#848484;"><td><img width="" style="margin-right:80px;" src="https://lh6.googleusercontent.com/-_9Zgofv7w00/VhVwGNF8NlI/AAAAAAAABYg/3Y9Y9-EQwk8/w500-h76-no/GOOGLE.jpg"></td></tr>
      </table>
    </td>
  </tr>  
  <tr>
    <td>
      <table style="margin-top:50px;" width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr style="margin-right:80px;text-align:center;font-size:20px;color:#848484;"><td>The qualification is hereby granted to:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
        <tr style="text-align:center;font-size:20px;color:#848484;font-style:italic;"><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$Nombre?></td></tr>
      </table>
    </td>
  </tr>  
  <tr>
    <td>
      <table style="margin-top:40px;" width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr style="text-align:center;font-size:20px;color:#848484;"><td>For passing the Google Apps Education Individual &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qualification (IQ)</td></tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
      <table style="margin-left:-40px;" width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr style="text-align:center;font-size:20px;color:#848484;"><td><img width="150" src="http://thumbs.dreamstime.com/x/sello-certificado-7784179.jpg"></td></tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
      <table style="margin-top:50px;" width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr style="text-align:center;font-size:20px;color:#848484;"><td>&nbsp;</td></tr>
      </table>
    </td>
  </tr>
</table>
<page_footer></page_footer>
</page>

