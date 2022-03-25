

       <?php
	$cn = new PDO("pgsql:host=localhost;port=5432;dbname=test;", 'postgres', 'abcd1234') or die("Erreur");
    $sql = 'SELECT * FROM s1.book';   
        foreach ($cn->query($sql) as $row) 
        {
            print $row[0] . " ";
            print $row[2] . "-->";
            print $row[3] . "<br>";
        }
		$cn = null;
       ?>
       

       <?php
	// $cn = new PDO("pgsql:host=localhost;port=5432;dbname=test;", 'postgres', 'abcd1234', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]) or die("Erreur");
    // $sql = 'insert into s1.book values(?,?,?,?,?)';  
    // $st = $cn->prepare($sql);
    // $st->execute(['aaaa','zzzzz','eeeee','12/01/2020',8]); 
    
    // echo "Goooooooood";
    // $st=null; 
	// 	$cn = null;
       ?>
    

  