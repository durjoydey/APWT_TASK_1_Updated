<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <table width='100%'>
            <tr>
                <td>
                    <a href="{{ route('Home') }}">Home</a>
                </td>
                <td>
                    <a href="{{ route('Service') }}">Service</a>
                </td>
                <td>
                    <a href="{{ route('Teams') }}">Teams</a>
                </td>
                <td>
                    <a href="{{ route('About') }}">About</a>
                </td>
                <td>
                    <a href="{{ route('Contact') }}">Contact</a>
                </td>
            </tr>
        </table>

        
    </div>
    
</body>
</html>