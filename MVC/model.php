<?php

class Model
{
        public $connection="";
        function __construct()
        {
            $this->connection= new mysqli("localhost","root","","register");
            // $this->conn = new mysqli("localhost","root","","mvcdb");
        }


            function insert($table,$data)
            {
                $col_arr= array_keys($data);
                $col = implode(",", $col_arr);
        
                $val_arr = array_values($data);
                $val = implode("','",$val_arr);
        
                // insert into users (name,email) values ('xyz','x@gmail.com')
                $query = "insert into $table ($col) values ('$val')";
        
                $run = $this->connection->query($query);
        
              
            }
                function select($tbl)
                {
                     $sel = "select * from $tbl";
                     $res = $this->connection->query($sel);
                     while($fetch = $res->fetch_object())
                     {
                        $arr[] = $fetch;
                        // print_r($arr);
                     }
            
                  if(!empty($arr))
                  {
                    return $arr;
                   }
            
                }


                function select_where($table,$data)
                {
                    $col= array_keys($data);
                    $value= array_values($data);

                    // select * from table where id =id and email=mail;

                    $sql="SELECT * FROM mvc WHERE 1=1 ";
                    $f=0;
                    foreach($data as $were)
                    {
                        $sql.="and $col[$f]='$value[$f]'";
                        $f++;

                    }
                    $run=$this->connection->query($sql);
                    // print_r($run);
                    return $run;
        
                    

                }

                function update($tbl,$datas,$where)
                {
                    $update="UPDATE $tbl SET ";
                    $col_array= array_keys($datas);
                    $value_array= array_values($datas);
                    $count= count($datas);
                    $i=0;
                    foreach($datas as $dt)
                    {
                        if ($count==$i+1)
                        {
                            $update.="$col_array[$i]='$value_array[$i]'";

                        }
                        else{

                            $update.="$col_array[$i]='$value_array[$i]',";
                            $i++;

                        }


                    }

                    $update.= "where 1=1 ";
                    
                    $keys_array= array_keys($where);
                    $value_array= array_values($where);
                    $j=0;
                    foreach($where as $w)
                    {
                        $update.="and $keys_array[$j]='$value_array[$j]'";
                        $j++;
                    }
                    $run=$this->connection->query($update);
                    
                    return ($run);








                }



                function delete ($table,$where)
                {
                    $col_array= array_keys($where);
                    $col_value= array_values($where);
                        //  print_r($col_value);
                    $delete="DELETE FROM $table WHERE 1=1 ";
                    $i=0;
                    foreach($where as $del)
                    {
                    $delete.="and $col_array[$i]='$col_value[$i]';";
                    $i++;
                }
                
                    $run=$this->connection->query($delete);
                    return($run);



                }
            










            }
        

?>