<?php
//Upload Skript von http://www.savasplace.com/

//Maximum file size in kb
$MAX_SIZE = 5000000;
                            
//Allowable file ext. names
$FILE_EXTS  = array('.zip','.jpg','.png','.gif','.doc','.xls','.ppt','.odt','.ods','.odp','.txt','.pdf'); 

//Allow file delete? no, if only allow upload only
$DELETABLE  = true;                               


/************************************************************
 *     Setup variables
 ************************************************************/
$site_name = $_SERVER['HTTP_HOST'];
$url_dir = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
$url_this =  "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

$upload_dir = "files/";
$upload_url = $url_dir."/files/";
$message ="";

/************************************************************
 *     Create Upload Directory
 ************************************************************/
if (!is_dir("files")) {
  if (!mkdir($upload_dir))
  	die ("upload_files directory doesn't exist and creation failed");
  if (!chmod($upload_dir,0755))
  	die ("change permission to 755 failed.");
}

/************************************************************
 *     Process User's Request
 ************************************************************/
if ($_REQUEST[del] && $DELETABLE)  {
  $resource = fopen("log.txt","a");
  fwrite($resource,date("Ymd h:i:s")."DELETE - $_SERVER[REMOTE_ADDR]"."$_REQUEST[del]\n");
  fclose($resource);
  
  if (strpos($_REQUEST[del],"/.")>0);                  //possible hacking
  else if (strpos($_REQUEST[del],$upload_dir) === false); //possible hacking
  else if (substr($_REQUEST[del],0,6)==$upload_dir) {
    unlink($_REQUEST[del]);
    print "<script>window.location.href='$url_this?message=Erfolgreich entfernt.'</script>";
  }
}
else if ($_FILES['userfile']) {
  $resource = fopen("log.txt","a");
  fwrite($resource,date("Ymd h:i:s")."UPLOAD - $_SERVER[REMOTE_ADDR]"
            .$_FILES['userfile']['name']." "
            .$_FILES['userfile']['type']."\n");
  fclose($resource);

  $file_type = $_FILES['userfile']['type']; 
  $file_name = $_FILES['userfile']['name'];
  $file_ext = strtolower(substr($file_name,strrpos($file_name,".")));

  //File Size Check
  if ( $_FILES['userfile']['size'] > $MAX_SIZE) 
     $message = "Die Datei ist größer als die erlaubten 2MB.";
  //File Extension Check
  else if (!in_array($file_ext, $FILE_EXTS))
     $message = "$file_name($file_type) ist kein erlaubter Dateityp.";
  else
     $message = do_upload($upload_dir, $upload_url);
  
  print "<script>window.location.href='$url_this?message=$message'</script>";
}
else if (!$_FILES['userfile']);
else 
	$message = "Invalid File Specified.";

/************************************************************
 *     List Files
 ************************************************************/
$handle=opendir($upload_dir);
$filelist = "";
while ($file = readdir($handle)) {
   if(!is_dir($file) && !is_link($file)) {
      $filelist .= "<a href='$upload_dir$file'>".$file."</a> - ";
      if ($DELETABLE)
        
      $filelist .= " Hinzugefügt am  ".date("d.m.y H:i", filemtime($upload_dir.$file))
                   ."";
$filelist .= " <a style='text-decoration:none; font-weight:bold'  href='?del=$upload_dir".urlencode($file)."' title='delete'>x</a>";
      $filelist .="<br>";
   }
}

function do_upload($upload_dir, $upload_url) {

	$temp_name = $_FILES['userfile']['tmp_name'];
	$file_name = $_FILES['userfile']['name']; 
  $file_name = str_replace("\\","",$file_name);
  $file_name = str_replace("'","",$file_name);
	$file_path = $upload_dir.$file_name;

	//File Name Check
  if ( $file_name =="") { 
  	$message = "Ungültiger Dateiname.";
  	return $message;
  }

  $result  =  move_uploaded_file($temp_name, $file_path);
  if (!chmod($file_path,0777))
   	$message = "change permission to 777 failed.";
  else
    $message = ($result)?"$file_name wurde erfolgreich hochgeladen." :
     	      "Etwas stimmt nicht mit dieser Datei.";
  return $message;
}

?>

   <font color=red><?=$_REQUEST[message]?></font>
   <br>
   <form name="upload" id="upload" ENCTYPE="multipart/form-data" method="post">
     Datei auswählen und hochladen <input type="file" id="userfile" name="userfile">
     <input type="submit" name="upload" value="Datei hochladen!">
   </form>
   <u>Verfügbare Dateien:</u><br>

   <?=$filelist?>
