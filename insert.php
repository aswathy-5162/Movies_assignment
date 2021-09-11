<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('movies.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "\n";
   }

 

?>
<body style="background-color:powderblue;">
ENTER MOVIE DETAILS
 <center>
    
    <form action=" " method="POST" enctype="multipart/form-data">
     <input type="hidden" name="action" value="submit">
     <fieldset>
      <br>
      <br>
	 Enter the movie name<br>
	 <input name="mv_name" type="text" value="" size="50"><br><br>

	 Enter the actor name<br>
	 <input name="actor" type="text" value="" size="50"><br><br>

	 Enter the actress name<br>
	 <input name="actress" type="text" value="" size="50"><br><br>

	 Enter the director name<br>
	 <input name="director" type="text" value="" size="50"><br><br>

	 Enter the year of release<br>
	 <input name="year_of_release" type="text" value="" size="50"><br><br>
	 <input type="submit" value="submit">
      </fieldset>
     </form>
   <body>      
</center>
<?php

	 $mv_name=$_REQUEST["mv_name"];
    $actor=$_REQUEST['actor'];
    $actress=$_REQUEST['actress'];
    $director=$_REQUEST['director'];
    $year_of_release=$_REQUEST['year_of_release'];

   $sql  =<<<EOF
      INSERT INTO MOVI (MV_NAME,ACTOR,ACTRESS,DIRECTOR,YEAR_OF_RELEASE)
	   VALUES ( '$mv_name', '$actor', '$actress', '$director', '$year_of_release' );
	   
	 
	 
EOF; 	 

   $ret = $db->exec($sql);
   if(!$ret){
    echo $db->lastErrorMsg();
   } else {
    echo " \n";
    }
   $db->close();

    
    
?>
