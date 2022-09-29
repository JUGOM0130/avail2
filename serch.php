<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mojisize_16 {
            font-size: 16pt;
        }
    </style>
    <title>Index</title>
</head>

<body>
    <div class="container">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="pdm_menu.php">PDMメニュー</a></li>
                <li class="breadcrumb-item active" aria-current="page">検索</li>
            </ol>
        </nav>
        <h1 class="display-3 mt-3">検索フォーム</h1>
        <p>このフォームはキーワードにに一致するものを表示します</p>
        <form>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">コード</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">製品名</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">部分検索で検索可能</div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">在庫の有無</label>
            </div>
            <button type="submit" class="btn btn-primary">検索</button>
        </form>


    </div>
</body>

</html>