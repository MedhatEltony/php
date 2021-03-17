<?php
session_start();
var_dump($_POST);
if (isset($_POST))
    session_unset();

echo $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="process.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            <table>
                <tr>
                    <td>
                        <label for="name">Name</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input required type="text" id="name" name="name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">Date of birth:</label>
                    </td>
                </tr>
                <tr>
                    <input type="date" name="dob" id="dob">
                </tr>
                <tr>
                    <td>
                        <label for="city">City:</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select required name="city" id="city">
                            <option value="cairo">Cairo</option>
                            <option value="alex">Aluxandria</option>
                            <option value="suiz">Suiz</option>
                            <option value="suhag">suhug</option>
                        </select>
                    </td>
                </tr>
                <tr>

                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>User Secu</legend>
            <table>
                <tr>
                    <td>
                        <label for="email">Email</label>
                    </td>
                    <td>
                        <input type="text" name="Email" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="username">Usernmae</label>
                    </td>
                    <td>
                        <input type="text" name="username" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend></legend>
            <table>
                <tr>
                    <td>
                        <label for="contact">Would you kike us to contact you?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="yes">
                            <input type="radio" id="yes" name="contact" value="Yes" />Yes
                        </label>

                        <label for="no">
                            <input type="radio" id="no" name="contact" value="NO" />No
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="contactpref">Select your proper communication tool</label>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sms">
                            <input type="checkbox" name="contactpref[]" id="sms" vlaue="sms">SMS
                        </label>
                        <label for="phone">
                            <input type="checkbox" name="contactpref[]" id="phone" vlaue="phone">Phone
                        </label>
                        <label for="cemail">
                            <input type="checkbox" name="contactpref[]" id="cemail" vlaue="cemail">Email
                        </label>

                    </td>
                </tr>
            </table>
        </fieldset>

        <input type="submit" value="send" name="register">
    </form>

</body>

</html>