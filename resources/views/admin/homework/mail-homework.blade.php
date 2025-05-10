<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $email_subject }}</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            margin-left: 5em;
            margin-top: 2em;
            color: #333;
            font-size: 10pt;
        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px dotted #ccc;
            margin: 1em 0;
            padding: 0;
            border-color: #ccc;
        }

        p {
            margin: .5em;
        }

        ul li {
            list-style: disc;
            margin-bottom: .5em;
            margin-left: 0;
        }

        p.italic {
            font-style: italic;
        }
    </style>
</head>

<body>
    <p>Hi {{ ucfirst($firstname) }},</p>
    <br>
    <p>Here are some links to driving related info which you might find helpful:</p>
    <br>
    <ul>
        @foreach ($homework_links as $title => $link)
            <li>{{ ucfirst($title) }}: <a href="{{ url($link) }}">{{ url($link) }}</a></li>
        @endforeach
    </ul>
    <br>

    <p>Cheers,</p>
    <br>
    <p>Neil.</p>

    <hr>
    <p>Chislehurst Driving School<br>07917 042 740<br><a
            href="{{ route('index') }}">https://chislehurstdrivingschool.co.uk</a></p>
    <br>

    <br>
    <p class="italix">Charges will incur if 24 hours notice is not provided for cancellations or changes to lessons.</p>
    <br>
    <p class="italic">If you've never logged in to the site before you can create a password and log in here: <a
            href="{{ url('/register') }}">Register</a></p>

    <hr>

</body>

</html>
