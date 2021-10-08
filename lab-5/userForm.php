<?php
        echo "<h2> User Form </h2>
        <form  method='POST' action='userData.php'>

            <div class='input-field'>
                <label for='fname'> First Name: </label>
                <input class='text-box' type='text' name='firstname' id='fname'>
            </div>

            <br>

            <div class='input-field'>
                <label for='lname'> Last Name: </label>
                <input class='text-box' type='text' name='lastname' id='lname'>
            </div>

            <br>

            <div class='input-field'>
                <label for='email'> Email: </label>
                <input class='text-box' type='text' name='email' id='email'>
            </div>

            <br>

            <div class='input-field'>
                <label for='address'> Address: </label>
                <input class='text-area' type='text' name='address' id='address'>
            </div>

            <br>

            <div class='input-field'>
                <label for='age'> Age: </label>
                <input class='text-box' type='number' name='age' id='age'>
            </div>

            <div class='btn'>
                <button type='submit'> CREATE </button>
            </div>

        </form>";
?>