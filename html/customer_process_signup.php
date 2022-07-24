<?php
    echo "entered in customer_process";
    //process the signup form
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['FullName'];
        $email = $_POST['customeremail'];
        $phone = $_POST['customerphone'];
        $address = $_POST['customeraddress'];
        $upassword = $_POST['customerpass'];


        //check for empty fields
        if(empty($name) || empty($email) || empty($upassword) || empty($phone) || empty($address))
        {
            header("Location: signin-customer.php?error=All fields required".'&name='.$name.'&email='.$email.'&phone'.$phone.'&address'.$address);
        }
        else
        {
                echo "\nreached not empty part";
            //check if email is already in use, if so, redirect to signup page
            include_once '../database/connect.php';
            echo "\nreached connected database";      
            header('Location: ../index.php');                 //
            $db = mysqli_select_db($connection, 'shipinArt');
            include_once '../database/customer_world.php';
            $query = "SELECT * FROM customer WHERE customer_email = '$email'";
            $result = mysqli_query($connection, $query);
            if(mysqli_num_rows($result) > 0)
            {
                header('Location: sigin-customer.php?error=Email already in use' . '&name=' . $name . '&email=' . $email .'&phone'.$phone.'&address'.$address);
            }
            else
            {
                //new user
                //check for image
                echo "\nreached new user";
             /*   if(isset($_FILES['citizenshipFront']))
                {
                    echo "reached inside citizenshipFront.";
                        $image_name = $_FILES['citizenshipFront']['name'];
                        $image_type = $_FILES['citizenshipFront']['type'];
                        $image_tmp_name = $_FILES['citizenshipFront']['tmp_name'];
                        $new_image_name = 'front_'.rand(1, 10000).'_'.$name.'_'.$image_name;
                        $image_path = 'extra_files/'.$new_image_name;

                        //check for image file type
                        $supported_types = array('image/jpeg', 'image/gif', 'image/png');

                        if(in_array($image_type, $supported_types))
                        {
                            echo 'image file supported.';
                            if (move_uploaded_file($image_tmp_name, $image_path)) 
                            {
                                echo "reached at citizenship front";
                                $citizenship_front = $new_image_name;
                            }

                        }
                        else
                        {
                            header('Location: signin-customer.php?error=Image file type not supported' . '&name=' . $name . '&email=' . $email .'&phone'.$phone.'&address'.$address);
                            return;
                        }
                }

               */
                // if(isset($_FILES['citizenshipBack']))
                // {
                
                //         $image_name = $_FILES['citizenshipBack']['name'];
                //         $image_type = $_FILES['citizenshipBack']['type'];
                //         $image_tmp_name = $_FILES['citizenshipBack']['tmp_name'];
                //         $new_image_name = 'back_'.rand(1, 10000).'_'.$name.'_'.$image_name;
                //         $image_path = 'extra_files/'.$new_image_name;

                //         //check for image file type
                //         $supported_types = array('image/jpeg', 'image/gif', 'image/png');

                //         if(in_array($image_type, $supported_types))
                //         {
                //             echo 'image file supported.';
                            
                //         }
                //         else
                //         {
                //             header('Location: signin-customer.php?error=Image file type not supported' . '&name=' . $name . '&email=' . $email .'&phone'.$phone.'&address'.$address);
                //             return;
                //         }
                  
                // }
                // echo "reached citizenship back";
                // if (move_uploaded_file($image_tmp_name, $image_path)) 
                // {
                //     $citizenship_back = $new_back_image_name;
                // }

                //encrupt password
                $upassword = md5($upassword);

                //insert user into database
                $query = "INSERT INTO customer( customer_name, customer_email, customer_phone, customer_address, user_image,  customer_password) VALUES ('$name', '$email', '$phone', '$address', '$upassword')";
                $result = mysqli_query($connection, $query);
                echo "reached at insert file and inserted.";
                
                if($result)
                {
                   //redirect to login page
                   header('Location: signin-customer.php?error=You are now registered and can log in');
                }
                else
                {
                    header('Location: signin-customer.php?error=Something went wrong' . '&name=' . $name . '&email=' . $email .'&phone'.$phone.'&address'.$address);
                }
            }
        }
    }
    else
    {
        header("Location: signin-customer.php");
    }

?>
