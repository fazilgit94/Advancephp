<?php

include "model.php";
class Controller extends Model
{
    
    function __construct()
    {
        Model:: __construct();
        $url= $_SERVER['PATH_INFO'];
         
        switch($url)
        {
            case "/index":
                if (isset($_REQUEST['btn']))
                {
                     $name= $_REQUEST['uname'];
                     $email=$_REQUEST['mail'];
                     $pass=$_REQUEST['psw'];
                    //  $cpass=$_REQUEST['cpsw'];
                     $gender=$_REQUEST['gen'];
                     $hobby=$_REQUEST['hob'];
                     $store="";
                     foreach($hobby as $value)
                     {
                        $store.=$value .',';
                     }
                    //  $image=$_REQUEST['files'];
                     if (isset($_FILES['files']))
                     {
                        $file_name= $_FILES['files']['name'];
                        $temp_file= $_FILES['files']['tmp_name'];
                        $folder="images/".$file_name;

                        move_uploaded_file($temp_file,$folder);

                        $data = array
                        (
                            "uname"=>$name,
                            "uemail"=>$email,
                            "password"=>$pass,
                            "gender"=>$gender,
                            "hobby"=>$store,
                            "images"=>$file_name
                        );
                     $show=$this->insert('mvc',$data);
                        if($show)
                        {
                          echo "
                          <script>
          
                              Alert('records inserted..!)
                          </script>
                          
                          ";
          
                        }
                        
                    }
                    
                }
                include "index.php";

                break;

                case "/manage-users":
       
                    $user_arr =$this->select("mvc");
                    // print_r($user_arr);
                     include "manageuser.php";
                     break;

                    case "/updateuser":

                        if ($_REQUEST["update_data"])
                        {
                            $store=$_REQUEST["update_data"];
                            $data=array(
                                "id"=>$store
                            );
                            
                        }
                              $qur=$this->select_where('$mvc',$data);
                              $fetch=$qur->fetch_object();
                            // print_r($fetch->images);


                            if (isset($_REQUEST['update']))
                            {
                                $name=$_REQUEST['uname'];
                                $mail=$_REQUEST['mail'];
                                $psw=$_REQUEST['psw'];
                                // $gen=$_REQUEST['gen'];
                                // $hobby=$_REQUEST['hobby[]'];
                                $image=$_FILES['files']['name'];
                              
                                $temp_file= $_FILES['files']['tmp_name'];
                                $folder="images/".$image;

                                move_uploaded_file($temp_file,$folder);
                                if($_FILES['files']['size']>0)
                                { 
                                        $datas= array(
                                            'uname'=>$name,
                                            'uemail'=>$mail,
                                            'password'=>$psw,
                                            // 'gender'=>$gen,
                                            // 'hobby'=>$hobby,
                                            'images'=>$image
                                        );
                                }
                                else{
                                   
                                    $datas= array(
                                        'uname'=>$name,
                                        'uemail'=>$mail,
                                        'password'=>$psw,
                                        // 'gender'=>$gen,
                                        // 'hobby'=>$hobby,
                                        // 'images'=>$image,
                                        
                                    );
                                }

                               $run= $this->update("mvc",$datas,$data);
                                header("location:/Tops%20Assignments/Practise%20folder/Advance%20PHP/MVC/manage-users");
                            }

                        include "updateuser.php";
                        break;


                case "/deleteuser":
                    if ($_REQUEST['delete_data'])
                    {
                        $id=$_REQUEST['delete_data'];
                        $where=array(
                            "id"=>$id
                        );
                       $res=$this->delete('mvc',$where);
                       
               
                
                    }
                    break;
        }
    }
}

$obj = new Controller();


?>