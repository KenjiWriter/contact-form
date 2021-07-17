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
            <form action="/store" method="POST">
                @csrf
                <table>
                    <tr>
                        <td><label for="">*Your e-mail:</label>@error('email') <div style="color:red">{{$message}}</div> @enderror <input type="email" id="email" name="email" placeholder="mail@domian.com" value="{{ old('email') }}"></td>
                    </tr>
                    <tr>
                        <td><label for="">(optional) First name:</label><input type="text" id="f_name" name="f_name" placeholder="Your name" value="{{ old('f_name') }}"></td>
                        <td><label for="">(optional) Last name:</label> <input type="text" id="l_name" name="l_name" placeholder="Your last name" value="{{ old('l_name') }}"></td>
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
                        <td>@error('message') <div style="color:red">{{$message}}</div> @enderror<textarea name="message" id="message" cols="30" rows="10"></textarea></td>
                    </tr>
                <table>
                    <input align="center" type="submit" value="Send">
            </form>
        </div>
    </fieldset>
</body>
</html>