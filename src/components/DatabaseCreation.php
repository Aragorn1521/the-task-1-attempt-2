<?php
namespace TaskNumber1\components;

Class DatabaseCreation {
    
    
    public function DbCreation(){
       
    $db = Db::getConnectionDB();
    
    $sql = file_get_contents("src/components/sql/db_test.sql");
    $db->exec($sql);
        
}
    
   public function CreatingATable() {
       
    $db = Db::getConnection();
     
    $sql = file_get_contents("src/components/sql/table_test.sql");
    $db->exec($sql);
}
    public function PopulatingTheTable(){
        
    $db = Db::getConnection();
     
    $sql = file_get_contents("src/components/sql/table_test_data.sql");
    $db->query($sql);
}

}
 