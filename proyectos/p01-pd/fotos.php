<?PHP

$DirPath="6-fotografia/";
$mydir_list="";
if (($handle=opendir($DirPath)))
{
$files = array();
$times = array();
 while ($node = readdir($handle))

 {
     $nodebase = basename($node);
     if ($nodebase!="." && $nodebase!="..")
     {
         if(!is_dir($DirPath.$node))
         {
$pos = strrpos($node,".jpg");
            if($pos===false){
   }

else{
	//export to xml
	$filestat = stat($DirPath.$node);
	$times[] = $filestat['mtime'];
	$files[] = $DirPath.$node;
	$mydir_list.="![](".$DirPath.$node.")\n";
	array_multisort($times, SORT_NUMERIC, SORT_DESC, $files);


}
}
     }
 }
}
foreach($files as $file) { $mydir_list.="<image class=\"foto\" src=\"".$file."\" />\n"; }
echo $mydir_list;

?>
