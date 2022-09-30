<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap本体-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Vue.js-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <style>
        .mojisize_16 {
            font-size: 16pt;
        }
    </style>
    <title>マスタ管理</title>
</head>

<body>
    <div class="container" id="app">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">マスタ管理</li>
            </ol>
        </nav>
        <h1 class="display-4">マスタ管理</h1>
        <form>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="cd" class="form-label">製品コード</label>
                        <input type="text" class="form-control" id="cd" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">製品コードを入力してください</div>
                    </div>

                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="form-label">製品名</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">製品名を入力してください</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="kakaku1" class="form-label">販売価格</label>
                            <input type="number" class="form-control" id="kakaku1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">販売価格を入力してください</div>
                        </div>

                    </div>
                    <div class="col">
                        <label for="kakaku2" class="form-label">原価</label>
                        <input type="number" class="form-control" id="kakaku2" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">原価を入力してください</div>
                    </div>
                    <div class="col">
                        <label for="kakaku3" class="form-label">原価率</label>
                        <input type="number" class="form-control" id="kakaku3" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">原価を率入力してください</div>
                    </div>
                </div>
                <template v-for="item in list">
                    <div class="row">
                        <div class="col">
                            <label for="b1" class="form-label">使用部品コード{{item.no}}</label>
                            <input type="text" class="form-control" id="b1" aria-describedby="emailHelp">
                        </div>
                        <div class="col">
                            <label for="b2" class="form-label">使用部品名{{item.no}}</label>
                            <input type="text" class="form-control" id="b2" aria-describedby="emailHelp">
                        </div>
                    </div>
                </template>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="comment" class="form-label">備考</label>
                            <textarea class="form-control" id="comment" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">登録</button>
            <button type="button" class="btn btn-success" v-on:click="add">使用部品追加</button>
        </form>
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                list: [
                    {"no":"1"},
                    {"no":"2"},
                    {"no":"3"},
                    {"no":"4"}
                ]
            },
            methods:{
                //行追加
                add:function(){
                    this.list.push({"no":String(this.list.length+1)});
                }
            }
        })

    </script>
</body>

</html>