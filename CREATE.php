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
      echo " database opened successfully\n";
   }




    $sql=<<<EOF
        CREATE TABLE MOVI
        (ID     INTEGER   PRIMARY KEY,    
         mv_name    TEXT     NOT NULL,
         actor     TEXT     NOT NULL,
         actress     TEXT     NOT NULL,
         director     TEXT     NOT NULL,
         year_of_release     NUMBER     NOT NULL);
EOF;
   $ret = $db->exec($sql);
   if(!$ret){
    echo $db->lastErrorMsg();
   } else {
     echo "database created successfully\n";
   }
   $db->close();
?>