<?php
    // crea una funzione per ristabilire il database
    function DB() {
        $dbconn = pg_connect("host=localhost port=5432 dbname=sicurezza user=postgres password=180402") 
        or die('Could not connect: ' . pg_last_error());
        $query="drop TABLE if exists usercredential; 
                create TABLE if not exists usercredential (username varchar(20) primary key, password varchar(20), firstname varchar(20), lastname varchar(20), age integer, gender varchar(10));
                insert into usercredential values
                ('user001','123','firstname001','lastname001',1,'male'),
                ('user002','123','firstname002','lastname002',2,'female'),
                ('user003','123','firstname003','lastname003',3,'male'),
                ('user004','123','firstname004','lastname004',4,'female'),
                ('user005','123','firstname005','lastname005',5,'male'),
                ('user006','123','firstname006','lastname006',6,'female'),
                ('user007','123','firstname007','lastname007',7,'male'),
                ('user008','123','firstname008','lastname008',8,'female'),
                ('user009','123','firstname009','lastname009',9,'male'),
                ('user010','123','firstname010','lastname010',10,'female'),
                ('user011','123','firstname011','lastname011',11,'male'),
                ('user012','123','firstname012','lastname012',12,'female'),
                ('user013','123','firstname013','lastname013',13,'male'),
                ('user014','123','firstname014','lastname014',14,'female'),
                ('user015','123','firstname015','lastname015',15,'male'),
                ('user016','123','firstname016','lastname016',16,'female'),
                ('user017','123','firstname017','lastname017',17,'male'),
                ('user018','123','firstname018','lastname018',18,'female'),
                ('user019','123','firstname019','lastname019',19,'male'),
                ('user020','123','firstname020','lastname020',20,'female');";
        pg_query($dbconn, $query);
        pg_close($dbconn);
    }
    // chiama la funzione
    DB();
    // torna alla index
    header("Location: index.php");
?>