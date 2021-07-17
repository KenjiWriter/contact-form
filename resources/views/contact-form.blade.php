<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
    <title>Contact form by Wenzzi</title>
</head>
<body>
    <fieldset>
        <legend>Contact form</legend>
        <div align='center'>
            <form action="{{ route('post') }}">
                <table>
                    <tr>
                        <td><label for="">*Your e-mail:</label> <input type="email" id="email" name="email" placeholder="mail@domian.com"></td>
                    </tr>
                    <tr>
                        <td><label for="">(optional) First name:</label> <input type="email" id="email" name="email" placeholder="mail@domian.com"></td>
                        <td><label for="">(optional) Last name:</label> <input type="email" id="email" name="email" placeholder="mail@domian.com"></td>
                    </tr>
                    <tr>
                        <td><label for="">Priority:</label>
                            <select name="priority" id="priority">
                                <option value="1">Low</option>
                                <option value="2">Medium</option>
                                <option value="3">High</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Message:</label></td>
                    </tr>
                    <tr>
                        <td><textarea name="message" id="message" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                    <td><input align="center" type="submit" value="Send"></td>
                    </tr>
                <table>
            </form>
        </div>
    </fieldset>
</body>
</html>