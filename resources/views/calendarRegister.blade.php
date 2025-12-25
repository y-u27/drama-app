<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>カレンダー登録</title>
</head>

<body class="bg-gradient-to-l from-indigo-300 via-blue-200 to-sky-200">
    <div class="px-130 py-8">
        <div class="p-5 py-2 w-110 h-146 bg-white rounded shadow-2xl">
            <form action="{{ route('calenderRegister.create') }}" method="POST" enctype="multipart/form-data" class="my-5">
                @csrf
                <!-- タイトル入力欄 -->
                <div>
                    <input type="text" name="title" class="my-2 mb-4 border rounded bg-white" placeholder="タイトルを入力">
                </div>
                <!-- 各ボタン機能 -->
                <div class="flex">
                    <!-- 戻るボタン -->
                    <div class="px-1 py-3">
                        <button type="button" class="bg-white border-4 border-sky-700 w-30 h-15 px-10 py-2 rounded" onclick="history.back()">戻る</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>