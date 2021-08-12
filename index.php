
<?php

$stdnt = [
    
    [
        'name' =>   'Tasmin Ahmed',
        'gender' => 'Female',
        'birthday' => '25th August',
        'place' => 'Dhaka',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '1.jpg',
    ],

    [
        'name' =>   'Nayan Islam',
        'gender' => 'Male',
        'birthday' => '28th February',
        'place' => 'Rajshahi',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '2.jpg',
    ],

    [
        'name' =>   'Md. A Kasem',
        'gender' => 'Male',
        'birthday' => '2nd November',
        'place' => 'Comilla',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '3.jpg',
    ],

    [
        'name' =>   'Jamal Hossain',
        'gender' => 'Male',
        'birthday' => '31st December',
        'place' => 'Mirpur',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '4.jpg',
    ],

    [
        'name' =>   'Golam Kibria',
        'gender' => 'Male',
        'birthday' => '18th June',
        'place' => 'Dhaka',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '5.jpg',
    ],

    [
        'name' =>   'Zubayer Rahman',
        'gender' => 'Male',
        'birthday' => '7th August',
        'place' => 'Dhaka',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '6.jpg',
    ],

    [
        'name' =>   'H.M. M.B. Imu',
        'gender' => 'Male',
        'birthday' => 'undisclosed',
        'place' => 'Mirpur',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '7.jpg',
    ],

    [
        'name' =>   'Tazmim H Bondhon',
        'gender' => 'Male',
        'birthday' => '20th July',
        'place' => 'Rangpur',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '8.jpg',
    ],

    [
        'name' =>   'Md. M Sobuj',
        'gender' => 'Male',
        'birthday' => 'undisclosed',
        'place' => 'Chandpur',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '9.jpg',
    ],

    [
        'name' =>   'Md. Shariful Islam',
        'gender' => 'Male',
        'birthday' => '10th December',
        'place' => 'Gazipur',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '10.jpg',
    ],

    [
        'name' =>   'Fareya Borhan',
        'gender' => 'Female',
        'birthday' => '23rd June',
        'place' => 'Chittagong',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '11.jpg',
    ],

    [
        'name' =>   'Arafat Rahman ',
        'gender' => 'Male',
        'birthday' => '26th March',
        'place' => 'Manikgunj',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '12.jpg',
    ],

    [
        'name' =>   'Humayun Kabir',
        'gender' => 'Male',
        'birthday' => 'undisclosed',
        'place' => 'Dhaka',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '13.jpg',
    ],

    [
        'name' =>   'Sazia Zaman',
        'gender' => 'Female',
        'birthday' => '14th March',
        'place' => 'Mirpur',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '14a.jpg',
    ],

    [
        'name' =>   'Sadek Noman',
        'gender' => 'Male',
        'birthday' => 'undisclosed',
        'place' => 'Dhaka',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '15.jpg',
    ],

    [
        'name' =>   'Foysal Bin Hossain',
        'gender' => 'Male',
        'birthday' => '20th September',
        'place' => 'Chandpur',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '17.jpg',
    ],

    [
        'name' =>   'Safkat Hasin Alavi',
        'gender' => 'Male',
        'birthday' => '24th August',
        'place' => 'Noakhali',
        'quote' => 'Lorem ipsum is a placeholder text .',
        'image' => '18.jpg',
    ],

    [
        'name' =>   'Md Tutul',
        'gender' => 'Male',
        'birthday' => '12th July',
        'place' => 'Dhaka',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '19.jpg',
    ],
    
    [
        'name' =>   'Sadman A Susmoy',
        'gender' => 'Male',
        'birthday' => '23rd March',
        'place' => 'Bhairab',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '20.jpg',
    ],

    [
        'name' =>   'Uzma Surwat',
        'gender' => 'Female',
        'birthday' => '25th August',
        'place' => 'Dhaka',
        'quote' => 'Lorem ipsum is a placeholder text.',
        'image' => '21.jpg',
    ]
];
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo "Personal ID Cards";?></title>

        <!--links-->
        <link href="asset/Css/media.css" rel="stylesheet">
        <link rel="stylesheet" href="asset/css/style.css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    </head>

    <body style="padding: 40px 0; background: #235e6f;">
        
            <div class="container mt-5">
                <div class="row">
                        <?php

                        foreach($stdnt as $stdnt) :
                        
                        
                        ?>


                    <div class="col-md-3 mt-5">
                        <div class="card shadow rounded">
                            <img src="img\<?php
                                echo $stdnt['image'];
                            ?>" alt="" class="card-img" width="250px" height="250px">
                            <div class="card-body bg-info text-light">
                                <h5><?php
                                echo $stdnt['name'];
                            ?></h5>
                                <h5><?php
                                echo $stdnt['gender'];
                            ?></h5>
                                <h5><?php
                                echo $stdnt['birthday'];
                            ?></h5>
                                <h5><?php
                                echo $stdnt['place'];
                            ?></h5>
                                <p>Lorem ipsum is a placeholder text.</p>
                            </div>
                        </div>
                    </div>

                    <?php

                    endforeach ;
                    
                    
                    ?>




                </div>
            </div>


              <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
             
        
    </body>
</html>

