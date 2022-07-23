<?php
    //process the signup form
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['FullName'];
        $email = $_POST['artistemail'];
        $phone = $_POST['artistphone'];
        $address = $_POST['artistaddress'];
        $upassword = $_POST['artistpass'];
        $citizenship_front = '';
        $citizenship_back = '';


        //check for empty fields
        if(empty($name) || empty($email) || empty($upassword) || empty($phone) || empty($address))
        {
            header("Location: signin-artist.php?error=All fields required".'&name='.$name.'&email='.$email.'&phone'.$phone.'&address'.$address);
        }
        else
        {
            //check if email is already in use, if so, redirect to signup page
            include_once '../database/connect.php';
            $db = mysqli_select_db($connection, 'shipinArt');
            $query = "SELECT * FROM artist WHERE artist_email = '$email'";
            $result = mysqli_query($connection, $query);
            if(mysqli_num_rows($result) > 0)
            {
                header('Location: sigin-artist.php?error=Email already in use' . '&name=' . $name . '&email=' . $email .'&phone'.$phone.'&address'.$address);
            }
            else
            {
                //new user
                //check for image

                if(isset($_FILES['citizenshipFront']))
                {
                    if($_FILES['citizenshipFront']['name'] != '')
                    {
                        $image_name = $_FILES['citizenshipFront']['name'];
                        $image_type = $_FILES['citizenshipFront']['type'];
                        $image_tmp_name = $_FILES['citizenshipFront']['tmp_name'];
                        $new_image_name = 'front_'.rand(1, 10000).'_'.$name.'_'.$image_name;
                        $image_path = '../extra_files/'.$new_image_name;

                        //check for image file type
                        $supported_types = array('image/jpeg', 'image/gif', 'image/png');

                        if(in_array($image_type, $supported_types))
                        {
                            echo 'image file supported.';
                        }
                        else
                        {
                            header('Location: signin-artist.php?error=Image file type not supported' . '&name=' . $name . '&email=' . $email .'&phone'.$phone.'&address'.$address);
                            return;
                        }
                  }
                }

                if (move_uploaded_file($image_tmp_name, $image_path)) 
                {
                    $citizenship_front = $new_image_name;
                }

                if(isset($_FILES['citizenshipBack']))
                {
                    if($_FILES['citizenshipBack']['name'] != '')
                    {
                        $image_name = $_FILES['citizenshipBack']['name'];
                        $image_type = $_FILES['citizenshipBack']['type'];
                        $image_tmp_name = $_FILES['citizenshipBack']['tmp_name'];
                        $new_image_name = 'back_'.rand(1, 10000).'_'.$name.'_'.$image_name;
                        $image_path = '../extra_files/'.$new_image_name;

                        //check for image file type
                        $supported_types = array('image/jpeg', 'image/gif', 'image/png');

                        if(in_array($image_type, $supported_types))
                        {
                            echo 'image file supported.';
                        }
                        else
                        {
                            header('Location: signin-artist.php?error=Image file type not supported' . '&name=' . $name . '&email=' . $email .'&phone'.$phone.'&address'.$address);
                            return;
                        }
                  }
                }

                if (move_uploaded_file($image_tmp_name, $image_path)) 
                {
                    $citizenship_back = $new_image_name;
                }

                //encrupt password
                $upassword = md5($upassword);

                //insert user into database
                $query = "INSERT INTO artist( artist_name, artist_email, artist_phone, artist_address, user_image,  artist_password, artist_front_citizenship, artist_back_citizenship) VALUES ('$name', '$email', '$phone', '$address', '$upassword', '$citizenship_front', '$citizenship_back')";
                $result = mysqli_query($connection, $query);
                
                if($result)
                {
                   //redirect to login page
                   header('Location: signin-artist.php?error=You are now registered and can log in');
                }
                else
                {
                    header('Location: signin-artist.php?error=Something went wrong' . '&name=' . $name . '&email=' . $email .'&phone'.$phone.'&address'.$address);
                }
            }
        }
    }
    else
    {
        header("Location: signin-artist.php?error=Something went wrong");
    }

?>