<?php
        echo "
        <form  method='POST' action='userData.php'>

            <div class='input-field' style='border-radius: 5px;
                                            background-color: #f2f2f2;
                                            padding: 20px;
                                            width:420px;
                                            margin:100px 400px;'>
                <label for='fname'> First Name: </label>
                <input class='text-box' type='text' name='firstname' id='fname' style='width: 300px;
                                                                                       padding: 12px 20px;
                                                                                       margin: 8px 0;
                                                                                       display: inline-block;
                                                                                       border: 1px solid #ccc;
                                                                                       border-radius: 4px;
                                                                                       box-sizing: border-box;
                                                                                       text-align:center;'>

            <br>

                <label for='lname'> Last Name: </label>
                <input class='text-box' type='text' name='lastname' id='lname' style='width: 300px;
                                                                                       padding: 12px 20px;
                                                                                       margin: 8px 0;
                                                                                       display: inline-block;
                                                                                       border: 1px solid #ccc;
                                                                                       border-radius: 4px;
                                                                                       box-sizing: border-box;
                                                                                       text-align: center;'>

            <br>

                <label for='email'> Email: </label>
                <input class='text-box' type='text' name='email' id='email' style='width: 300px;
                                                                                       padding: 12px 20px;
                                                                                       margin: 8px 30px;
                                                                                       display: inline-block;
                                                                                       border: 1px solid #ccc;
                                                                                       border-radius: 4px;
                                                                                       box-sizing: border-box;
                                                                                       text-align: center;'>

            <br>

                <label for='address'> Address: </label>
                <input class='text-area' type='text' name='address' id='address' style='width: 300px;
                                                                                       padding: 12px 20px;
                                                                                       margin: 8px 15px;
                                                                                       display: inline-block;
                                                                                       border: 1px solid #ccc;
                                                                                       border-radius: 4px;
                                                                                       box-sizing: border-box;
                                                                                       text-align: center;'>

            <br>

                <label for='age'> Age: </label>
                <input class='text-box' type='number' name='age' id='age' style='width: 300px;
                                                                                       padding: 12px 20px;
                                                                                       margin: 8px 40px;
                                                                                       display: inline-block;
                                                                                       border: 1px solid #ccc;
                                                                                       border-radius: 4px;
                                                                                       box-sizing: border-box;
                                                                                       text-align: center;'>

  
                <button type='submit' style='width: 200px;
                                              background-color: #4CAF50;
                                              color: white;
                                              padding: 14px 20px;
                                              margin: 8px 100px;
                                              border: none;
                                              border-radius: 4px;
                                              cursor: pointer;
                                              align: center;'> CREATE </button>
            </div>

        </form>";
?>