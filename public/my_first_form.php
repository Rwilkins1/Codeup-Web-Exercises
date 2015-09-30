
<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
    <title>My First HTML Form!</title>
    <h2>Members, Log In</h2>
        <form method="POST" action="/my_first_form.php">
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="Enter Username" autofocus>
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter Password">
            </p>
            <p>
                <button type="submit" name "submit">Login</button>
            </p>
        </form>
    <h2>Compose an Email!</h2>
        <form method="POST" action="/my_first_form.php">
            <p>
                <label for="to"></label>
                <input id="to" name="to" type="text" placeholder="To" required>
            </p>
            <p>
                <label for="from"></label>
                <input id="from" name="from" type="text" placeholder="From" required>
            </p>
            <p>
                <label for="Subject"></label>
                <input id="Subject" name="Subject" type="text" placeholder="Subject (Optional)">
            </p>
            <p>
                <label for="body"></label>
                <textarea id="body" name="body" type="text" placeholder="What's on Your Mind?"></textarea>
            </p>
            <p>
                <label for "save">Save a Copy to your "Sent" Folder?</label>
                <input type="checkbox" id="save" name="save" value="yes" checked>
            </p>
            <p>
                <input type="Submit" value="Send!">
            </p>
        </form>

    <h2>Multiple Choice Test!</h2>
        <form method="POST" action="/my_first_form.php">
            <p>What is your name?</p>
                <label>
                    <input type="radio" name="q1" value="Sir Lancelot of Camelot">
                    Sir Lancelot of Camelot
                </label><br>
                <label>
                    <input type="radio" name="q1" value="Bob">
                    Bob
                </label><br>
                <label>
                    <input type="radio" name="q1" value="Fredward">
                    Fredward
                </label>

            <p>What is your quest?</p>
                <label>
                    <input type="radio" name="q2" value="To find the crown, save the town, and Mr. Krabbs!">
                    To find the crown, save the town, and Mr. Krabbs!
                </label><br>
                <label>
                    <input type="radio" name="q2" value="I seek the Holy Grail!">
                    I seek the Holy Grail!
                </label><br>
                <label>
                    <input type="radio" name="q2" value="To follow that star. No matter how hopeless, no matter how far!">
                    To follow that star. No matter how hopeless, no matter how far!
                </label>

            <p>And What...is your Favorite Color?!</p>
                <label><input type="checkbox" id="color1" name="color[]" value="blue">Blue</label><br>
                <label><input type="checkbox" id="color2" name="color[]" value="blue..no, wait, AAAAAAH!">Blue..no, wait, AAAAAAH!</label><br>
                <label><input type="checkbox" id="color3" name="color[]" value="I don't know that">I don't know that</label>    
            
            <p><label for="Swallow">And What...is the Airspeed Velocity of an Unladen Swallow?</label></p>
               <select id="Swallow" name="Swallow[]" Multiple>
                    <option disabled selected>Select an Answer</option>
                    <option>12 mph</option>
                    <option>15 kph</option>
                    <option>African or European?</option>
                </select>
                <p>
                    <input type="Submit">
                </p>

        </form>
    <h2>Select Testing</h2>
        <form method="POST" action="my_first_form.php">
            <label for="Do You Wanna Build a Snowman?">Do You Wanna Build a Snowman?</label>
            <select id="Do You Wanna Build a Snowman?" name="Do You Wanna Build a Snowman?">
                <option disabled selected>Select an Answer</option>
                <option value=1>Yes</option>
                <option value=0>Go Away, Anna</option>
            </select>
            <p><button type="Submit"><img src="/img/snowman.png"></button></p>       
        </form>

