<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Books</title>
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

        .ActOrders-Right-List {
            width: 70%;
            height: 500px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            color: var(--all-color2);
        }

        #table {
            height: 33%;
            padding: 5px 10px;
            margin-bottom: 10px;
            border-radius: 19px;
            background: var(--all-color1);
            box-shadow: 0px 0px 20px var(--all-color5);
        }

        .thead-th>form {
            display: flex;
        }

        .thead-th>form>* {
            margin: 0 5px;
        }

        .thead-th>form>div {
            width: 150px;
            display: flex;
            align-items: center;
        }

        .thead-th>form>div input {
            width: 40px;
            margin: 0 5px;
            border: none;
            border-bottom: 1px solid #9F9F9F;
            text-align: center;
            font-family: 'IR';
        }

        .thead-th>form>button {
            width: 80px;
            height: 30px;
            color: var(--all-color2);
            border: 1px solid #9F9F9F;
            border-radius: 5px;
            margin: 0 15px;
        }

        #tbody {
            height: calc(100% - 180px) !important;
        }

        #tr1 {
            width: 30%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        #tr1>th {
            width: 80px;
            height: 30px;
            border-radius: 30px;
            border: 1.5px solid rgba(84, 89, 234, 0.75);
            display: flex;
            justify-content: space-around;
            align-items: center;
            transition: all ease-in-out .2s;
            font-size: 14px;
        }

        #tr1>th>img {
            width: 15px;
            height: 13px;
            filter: invert(60%) sepia(12%) saturate(7466%) hue-rotate(218deg) brightness(84%) contrast(93%);
        }

        #tr1>th:hover {
            cursor: pointer;
            background: rgba(84, 89, 234, 0.75);
            color: var(--all-color1);
        }

        #tr1>th:hover>img {
            filter: invert(0%) sepia(100%) saturate(0%) hue-rotate(288deg) brightness(102%) contrast(102%);
        }

        .ActOrders-List-head {
            width: 100%;
            height: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .ActOrders-List-head>div {
            width: 40%;
            height: 40px;
            margin: var(--order-head-span-margin);
            position: relative;
            display: flex;
            justify-content: center;
        }

        .ActOrders-List-head>div>img {
            width: 17px;
            height: 17px;
            position: absolute;
            top: 9px;
            left: 10px;
        }

        .ActOrders-List-head>div>input {
            width: 100%;
            height: 35px;
            border-radius: 50px;
            box-shadow: 0px 0px 20px var(--all-color5);
            border: none;
            padding: 5px 10px;
            padding-left: 35px;
            font-family: 'IR';
            font-size: 13px;
        }

        .ActOrders-List-Thead {
            width: 100%;
            height: 40px;
            margin-bottom: 7px;
        }

        .ActOrders-List-Thead>tr {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid var(--all-color3);
            padding: 0 10px;
            padding-top: 10px;
        }

        .ActOrders-List-Thead>tr th {
            height: 100%;
            font-size: 13px;
            text-align: center;
            color: var(--all-color3);
        }

        .ActOrders-List-id {
            width: 8%;
        }

        .ActOrders-List-code {
            width: 10%;
        }

        .ActOrders-List-paik,
        .ActOrders-List-name {
            width: 20%;
        }

        .ActOrders-List-money {
            width: 17%;
        }

        .ActOrders-List-condition {
            width: 25%;
        }

        table {
            table-layout: fixed;
            word-wrap: break-word;
        }

        .ActOrders-List-Tbody {
            width: 100%;
            height: calc(100% - 75px);
            display: flex;
            justify-content: center;
            align-content: flex-start;
            flex-wrap: wrap;
            overflow-y: auto;
        }

        .ActOrders-List-Tbody>tr {
            width: 100%;
            height: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            margin: 5px 0;
            transition: all ease-in-out .2s;
            border-bottom: 1px solid var(--all-color5);
        }

        .ActOrders-List-Tbody>tr:hover {
            background: rgba(230, 230, 252, 0.2);
            box-shadow: 0px 0px 20px var(--all-color5);
            cursor: pointer;
        }

        .ActOrders-List-Tbody>tr>td {
            height: 100%;
            font-size: 13px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            white-space: break-spaces;
        }

        .ActOrders-List-Tbody>tr>td img {
            width: 30px;
            height: 30px;
            transition: all ease-in-out .2s;
        }

        .ActOrders-List-Tbody>tr>td img:hover {
            border-radius: 5px !important;
        }
    </style>

    <h1 style="width: 100%; text-align: center;">Your Books</h1>

    <table class="ActOrders-Right-List">

        <thead class="ActOrders-List-Thead">
            <tr>
                <th class="ActOrders-List-name">title</th>
                <th class="ActOrders-List-money">subject</th>
                <th class="ActOrders-List-money">created_at</th>
                <th class="ActOrders-List-condition">edit</th>
                <th class="ActOrders-List-condition">delete</th>
            </tr>
        </thead>

        <tbody class="ActOrders-List-Tbody" id="Side__Content1">
            @foreach ($books as $book)
                <tr>
                    <td class="ActOrders-List-name">{{ $book->title }}</td>
                    <td class="ActOrders-List-money">{{ $book->subject }}</td>
                    <td class="ActOrders-List-money">{{ $book->created_at }}</td>
                    <td class="ActOrders-List-condition"><a href="{{ route('book.edit', $book->id) }}"><img
                                src="/img/Vector (4).svg" alt=""></a></td>
                    <td class="ActOrders-List-condition">
                        <form style="position: relative; display: flex; justify-content: center;align-items: center;"
                            action="{{ route('book.delete', $book->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <img src="/img/Vector (5).svg" alt="">
                            <input
                                style="width: 100%; height: 100%; position: absolute; opacity: 0; left: 0; top: 0;cursor: pointer;"
                                type="submit">
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
