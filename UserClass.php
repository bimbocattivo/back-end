<?php

ini_set('display_errors',"1");


class UserClass{



function UserLogin ($usernameEmail,$password)
    {
        
     try{
         $db=connect();
         $hash_pwd=hash('sha256',$password);
 
         $stmt = $db->prepare("SELECT uid FROM users WHERE (username=:usernameEmail OR email=:usernameEmail) AND password=:hash_pwd");
 
         $stmt->bindParam("usernameEmail",$usernameEmail,PDO::PARAM_STR);
         $stmt->bindParam("hash_pwd",$hash_pwd,PDO::PARAM_STR);
         
 
         $stmt->execute();
         
         
 
         $count=$stmt->rowCount();
         print_r($count);
         $data=$stmt->fetch(PDO::FETCH_OBJ);
         print_r($count);
         $db =null;



         echo"query eseguito";


         if($count)
         {
             
             $_SESSION['uid']=$data->uid;
             echo"uid sessione:";
             //print_r($_SESSION);
             return true;
         }else{
             return false;
         }
         
     }
     catch(PDOException $e){
         echo '{"error":{"text":'. $e->getMessage() .'}}';
     }

    }




    public function userDetails($uid)
{
try{
$db = connect();
$stmt = $db->prepare("SELECT email,username,name,token,uid,data_login,status FROM users WHERE uid=:uid"); 
$stmt->bindParam("uid", $uid,PDO::PARAM_INT);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_OBJ); //User data
$stmt=null;
//print_r($data);
return $data;
}
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
}

}
    ?>

