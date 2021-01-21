<?php
    $dbhost = 'localhost';
    $dbname = 'abonnesdu';
    $dbuser = 'root';
    $dbpaswd = '';
    try{
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpaswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ERRMODE_WARNING));
    }catch(PDOexception $e){
        die("Une erreur est survenue lors de la connexion de la base de donnees");
    }



    //************* enregistrement abonnement******************** */
    if(isset($_POST['homeBouton'])){
		$mailSouscription = htmlspecialchars(trim($_POST['email']));
        $dateSou=date('d/m/Y');
        if($mailSouscription!=""){
           enregistrer_souscription($mailSouscription,$dateSou);
           header("location:../original/index.php?sabonneok=1");
           exit();
           
        }
       //echo $mailSouscription;
        header("location:../original/index.php?sabonneok=2");
        exit();
    }
    
    //insertion dans la table souscription
    function enregistrer_souscription($mailSouscription,$dateSou){
        global $db;
        $souscription = array(
            'mail'=>$mailSouscription,
            'dateSou'=>$dateSou
        );
        $sql = "INSERT INTO souscription(MailSouscription,dateSou) VALUES(:mail,:dateSou)";
        $req = $db->prepare($sql);
        $req->execute($souscription); 
    } 


//************* enregistrement message******************** */
    if(isset($_POST['envoyer'])){
		$nom = htmlspecialchars(trim($_POST['nom']));
		$entreprise = htmlspecialchars(trim($_POST['entreprise']));
		$mail = htmlspecialchars(trim($_POST['mail']));
        $message = htmlspecialchars(trim($_POST['message']));
        $dateCI=date('d/m/Y');
        //if($nom && $entreprise && $mail && $message && $dateCI){
            try {
                enregistrer_client($nom,$entreprise,$mail,$message,$dateCI);
                header("location:../original/contactpage.php?formctact=10");
                exit();

            } catch (\Throwable $th) {
                header("location:../original/contactpage.php?formctact=20");
                exit();
                     

            }
        // echo $nom;
         
       // }
    }
    
    //insertion dans la table client
    function enregistrer_client($nom,$entreprise,$mail,$message,$dateCI){
        global $db;
        
        $client = array(
            'nom'=>$nom,
            'entreprise'=>$entreprise,
            'mail'=>$mail,
            'MessageClient'=>$message,
            'dateCI'=>$dateCI
        );
        $sql = "INSERT INTO clients(NomClient,NomEntrprise,MailClient,MessageClient,dateCI) VALUES(:nom,:entreprise,:mail,:MessageClient,:dateCI)";
        $req = $db->prepare($sql);
        $req->execute($client);
    }