<?php
    $num_1="";
    $num_2="";
    $pl_sel="";
    $mn_sel="";
    $ml_sel="";
    $dv_sel="";
    $ek_sel="";
if (isset($_POST["result"])){
    $num_1=$_POST["num_one"];
    $num_2=$_POST["num_two"];
    $arithm=$_POST["arithm"];
    $sl="selected";
    switch ($arithm){
        case "plus": $result=$num_1+$num_2 AND $pl_sel=$sl; break;
        case "minus": $result=$num_1-$num_2 AND $mn_sel=$sl; break;
        case "mult": $result=$num_1*$num_2 AND $ml_sel=$sl; break;
        case "div": $result=$num_1/$num_2 AND $dv_sel=$sl; break;
        case "ekspon": $result=$num_1**$num_2 AND $ek_sel=$sl; break;
    }
    
}
else{

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" inital-scale="1">
        <title>Mini ZCalc</title>
        <style>
            
            /* >>>CSS GLOBAL STYLE<<<*/
            
            *{
                margin: 0;
                padding: 0;
            }
            html{
                font-size: 10px;
            }
            body{
                color: white;
                margin: 0;
                padding: 0;
                /* background: #F8F8F8; */
                font-family: Arial, sans-serif;
                background: silver;
                 /* background-image: url('img/bg.png'); */
                background-size: cover;
                background-attachment: fixed;
            }
            
            /* >>>CSS CORE STYLE<<< */
            
            #container{
                width: 960px;
                height: 300px;
                margin: 150px auto;
                padding: 40px 10px;
                background-color: rgba(8,8,8,0.6);
                /*background: url('img/bg.jpg') 0px -150px / cover no-repeat scroll padding-box border-box rgba(8,8,8,0.9);*/
                border-radius: 6px;
                box-shadow: -5px 5px 2px green;
            }
            form{
                margin: 0;
                width: 960px;
                /* height: 90px; */
                /* border: 0.1px solid red; */
            } 
            fieldset{
                margin: 0 auto;
                height: 90px;
                width: 952px;
                border-radius: 5px;
                overflow: hidden;
                padding: 6px 0 10px;
            }
            legend{
                font-size: 1.8rem;
                margin-left: 12px;
            }
            .operasi{
                width: 900px;
                margin: auto;
            }
            input.num{
                color: white;
                font-size: 20px;
                height: 30px;
                width: 400px;
                background: rgba(8,8,8,0.1);
                border: 1px solid green;
                text-align: center;
            }
            input.num1{
                float: left;
            }
            input.num2{
                float: right;
            }
            select{
                margin-left: 33px;
                margin-right: 33px;
                width: 30px;
                height: 30px;
                border: 1px solid green;
                background: white;
            }
            .submit{
                clear: both;
            }
            input[type="submit"]{
                background: white;
                border-radius: 2px;
                border: 2px solid green;
                color: green;
                width: 180px;
                margin: 15px 26px;
            }
            result{
                display: none;
            }
            .result2{
                padding: 40px 20px;
                width: 80%;
                height: 100px;
                margin: 0 auto;
                font-size: 20px;
            }
            .sub_result{
                margin-left: 200px;
                font-size: 30px;
            }
            .creator{
                float: right;
                margin: 5px 20px;
            }
            
            /* #### MEDIA QUERY TABLET #### */
            
            @media only screen and (min-width: 401px) and (max-width: 900px){
                #container{
                    width: 80%;
                    height: 400px;
                    /* min-width: 650px; */
                    margin: 5% auto;
                    padding: 40px 1%;
                }
                form{
                
                    width: 96%;
                    margin: 0 auto;
                   
                }
                fieldset{
                margin: 20px auto;
                height: 250px;
                width: 100%;
                border-radius: 5px;
                overflow: hidden;
                padding: 8% 0 12%;
                }
                legend{
                    font-size: 2.5rem;
                    margin-left: 2%;
                }
                .operasi{
                    width: 98%;
                    margin: 0 auto;
                }
                input.num{
                    color: white;
                    font-size: 20px;
                    height: 30px;
                    width: 40%;
                    background: rgba(8,8,8,0.1);
                    border: 1px solid green;
                    text-align: center;
                }
                input.num1{
                    float: left;
                }
                input.num2{
                    float: right;
                }
                select{
                    margin-left: 5%;
                    margin-right: 5%;
                    width: 8%;
                    height: 30px;
                    border: 1px solid green;
                    background: white;
                }
                .submit{
                    clear: both;
                }
                input[type="submit"]{
                    background: white;
                    border-radius: 2px;
                    border: 2px solid green;
                    color: green;
                    width: 40%;
                    margin: 20px 1%;
                }
                .result{
                    padding: 40px 20px;
                    width: 80%;
                    height: 360px;
                    margin: 0 auto;
                    font-size: 20px;
                }
                .sub_result{
                    margin-left: 200px;
                    font-size: 30px;
                }
                .result2{
                    display: none;
                }
            }
            
            /* #### CSS MEDIA QUERY SMARTPHONE #### */
            
             @media only screen and (max-width: 400px){
                body{
                    /* background: url('img/bg2.png'); */
                }
                #container{
                    width: 340px;
                    height: 450px;
                    margin: 50px auto 10px;
                    padding: 12px 0;
                    border-radius: 3px;
                }
                form{
                    width: 96%;
                    margin: 0 auto;
                   
                }
                fieldset{
                margin: 70px auto 20px;
                height: 250px;
                width: 97%;
                border-radius: 5px;
                overflow: hidden;
                padding: 8% 0 12%;
                }
                legend{
                    font-size: 2.5rem;
                    margin-left: 2%;
                }
                .operasi{
                    width: 98%;
                    margin: 0 auto;
                }
                input.num{
                    color: white;
                    font-size: 20px;
                    height: 30px;
                    width: 40%;
                    background: rgba(8,8,8,0.1);
                    border: 1px solid green;
                    text-align: center;
                }
                input.num1{
                    float: left;
                }
                input.num2{
                    float: right;
                }
                select{
                    margin-left: 4.5%;
                    margin-right: 4.5%;
                    width: 9%;
                    height: 30px;
                    border: 1px solid green;
                    background: white;
                }
                .submit{
                    clear: both;
                }
                input[type="submit"]{
                    background: white;
                    border-radius: 2px;
                    border: 2px solid green;
                    color: green;
                    width: 40%;
                    margin: 20px 1%;
                }
                .result{
                    padding: 40px 20px;
                    width: 80%;
                    height: 360px;
                    margin: 0 auto;
                }
                .sub_result{
                    margin-left: 20px;
                    margin-top: 15px;
                    font-size: 1.5rem;
                }
                .result2{
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <div id="container">
            <form action="index.php" method="post">
                <fieldset>
                    <legend>Mini ZCalc</legend>
                    <div class="operasi">
                        <input type="number" class="num num1" name="num_one" value="<?php echo $num_1;?>" autocomplete="off">
                        <select name="arithm">
                            <option value="plus" <?php echo $pl_sel;?>>+</option>
                            <option value="minus" <?php echo $mn_sel;?>>-</option>
                            <option value="mult" <?php echo $ml_sel;?>>x</option>
                            <option value="div" <?php echo $dv_sel;?>>/</option>
                            <option value="ekspon" <?php echo $ek_sel;?>>^</option>
                        </select>
                        <input type="number" class="num num2" name="num_two" value="<?php echo $num_2;?>" autocomplete="off">
                    </div>
                    <p class="submit">
                        <input type="submit" name="result" value="RESULT>>">
                    </p>
                    <?php if (isset($result)){
                        if ($result!==0){
                            echo "<audio src='img/move.ogg' type='audio/ogg' autoplay></audio>";
                            echo "<div class='result'>Result : <div class='sub_result'>$result</div></div>";
                        }
                    }
                    ?>
                </fieldset>
            </form>
            <p class="creator">Created by. Zaid Harisah |  Taka ID</p>
             <?php if (isset($result)){
                if ($result!==0){
                    echo "<audio src='img/move.ogg' type='audio/ogg' autoplay></audio>";
                        echo "<div class='result2'>The result is : <div class='sub_result'>$result</div></div>";
                }
             }
            ?>
        </div>
    </body>
</html>
