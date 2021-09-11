<body style="background-color:powderblue;">
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
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      SELECT * from MOVI;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['ID'] . "\n";
      echo "<br>";

    
      

      echo "\nmv_name = ". $row['mv_name'] ."\n";
      echo "\nactor = ". $row['actor'] ."\n";
      echo "\nactress = ".$row['actress'] ."\n\n";
      echo "\ndirector = ". $row['director'] ."\n";
      echo "\nyear_of_release = ". $row['year_of_release'] ."\n";
      
   }
   echo "\n\nOperation done successfully\n";
   $db->close();
?>
