<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit</title>
</head>

<body>
    <style>
        @font-face {
            font-family: IR;
            src: url('/font/IRANSans.ttf');
        }

        * {
            font-family: 'IR';
        }

        body {
            width: 98vw;
            height: 97vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        :root {
            --all-color1: #ffffff;
            --all-color2: #101010;
            --all-color3: #4149af;
            --all-color4: #5459ea;
            --all-color5: #c7c7c7;
            --all-color6: #dcd2f9;
        }

        .form-edit {
            width: 700px;
            height: 550px;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            border: 1px solid #4149af;
            border-radius: 10px;
            background: var(--all-color1);
            z-index: 101;
        }

        .form-edit div {
            width: 48%;
            height: 220px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .form-edit div textarea {
            width: 90% !important;
            height: 150px !important;
            resize: unset;
            border-radius: 5px;
        }

        .form-edit div p {
            width: 90%;
        }

        .form-edit a,
        .form-edit button {
            width: 100px;
            height: 40px;
            background: #5459ea;
            border-radius: 5px;
            border: none;
            color: var(--all-color1);
            cursor: pointer;
            margin: 0 5px;
        }
    </style>

    @include('errors.message')

    <form action="{{ route('book.update', $book->id) }}" method="post" class="form-edit">
        @csrf
        @method('put')
        <h2 style="width: 100%;text-align: center;">Edit Book</h2>
        <div>
            <p>title</p>
            <textarea name="title" cols="30" rows="10">{{ $book->title }}</textarea>
        </div>
        <div>
            <p>subject</p>
            <textarea name="subject" cols="30" rows="10">{{ $book->subject }}</textarea>
        </div>
        <button type="submit">save</button>
        <a href="{{ route('home') }}"
            style="background: #c7c7c7; text-decoration: none; display: flex; justify-content: center; align-items: center;">cancle</a>
    </form>
</body>

</html>
