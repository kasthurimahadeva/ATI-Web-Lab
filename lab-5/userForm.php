<?php
        echo "
        <html style='background-image: url(img2.jpg);
                     background-position: center;
                     background-size: cover;'>

        <form  method='POST' action='userData.php'>
            
            <div class='input-field' style='border-radius: 5px;
                                            background-color: transparent;
                                            box-shadow: black;
                                            padding: 20px;
                                            width:420px;
                                            margin:60px 100px;'>

                <h2 align='center' style='color: floralwhite; font-size:40px; font-family: monospace; margin-left:20px ;'> USER FORM </h2>

                <label for='fname' style='color: black; font-family: monospace; '> <b> First Name: </b< </label>
                <input class='text-box' type='text' name='firstname' id='fname' style='width: 300px;
                                                                                       padding: 12px 20px;
                                                                                       margin: 8px 0;
                                                                                       display: inline-block;
                                                                                       border: 1px solid #ccc;
                                                                                       border-radius: 4px;
                                                                                       box-sizing: border-box;
                                                                                       text-align:center;'>
                <br>
            
                <label for='lname'> <b> Last Name: </b> </label>
                <input class='text-box' type='text' name='lastname' id='lname' style='width: 300px;
                                                                                       padding: 12px 20px;
                                                                                       margin: 8px 1px;
                                                                                       display: inline-block;
                                                                                       border: 1px solid #ccc;
                                                                                       border-radius: 4px;
                                                                                       box-sizing: border-box;
                                                                                       text-align: center;'>
                 
                <br>
            
                <label for='email'> <b> Email: </b> </label>
                <input class='text-box' type='text' name='email' id='email' style='width: 300px;
                                                                                       padding: 12px 20px;
                                                                                       margin: 8px 34px;
                                                                                       display: inline-block;
                                                                                       border: 1px solid #ccc;
                                                                                       border-radius: 4px;
                                                                                       box-sizing: border-box;
                                                                                       text-align: center;'>
    
                <br>


                <label for='address'> <b> Address: </b> </label>
                <input class='text-area' type='text' name='address' id='address' style='width: 300px;
                                                                                       padding: 12px 20px;
                                                                                       margin: 8px 18px;
                                                                                       display: inline-block;
                                                                                       border: 1px solid #ccc;
                                                                                       border-radius: 4px;
                                                                                       box-sizing: border-box;
                                                                                       text-align: center;'>
    
                <br>

                <label for='age'> <b> Age: </b></label>
                <input class='text-box' type='number' name='age' id='age' style='width: 300px;
                                                                                       padding: 12px 15px;
                                                                                       margin: 8px 42px;
                                                                                       display: inline-block;
                                                                                       border: 1px solid #ccc;
                                                                                       border-radius: 4px;
                                                                                       box-sizing: border-box;
                                                                                       text-align: center;'>
    

                <br>

                <button type='submit' style='width: 200px;
                                              background-color: #4CAF50;
                                              color: white;
                                              padding: 14px 20px;
                                              margin: 10px 125px;
                                              border: none;
                                              border-radius: 4px;
                                              cursor: pointer;
                                              align: center;'> CREATE </button>
            </div>

        </form>";
?>