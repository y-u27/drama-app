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

    <!-- カレンダー登録フォーム ここから -->
    <div class="px-130 py-9">
        <div class="p-5 py-6 w-110 h-146 bg-white rounded shadow-2xl">
            <form action="{{ route('calendar.store') }}" method="POST" enctype="multipart/form-data" class="my-5">
                @csrf
                <!-- 登録日選択 -->
                <div class="mb-3">
                    <input type="date" name="start" class="border rounded">
                </div>
                <!-- 国カテゴリ選択 -->
                <select name="country" class="my-2 mt-3 bg-white border-1 border-solid border rounded">
                    <option value="Japan">Japan</option>
                    <option value="Korean">Korean</option>
                    <option value="Thailand">Thailand</option>
                    <option value="America">America</option>
                    <option value="Other">Other</option>
                </select>
                <!-- タイトル入力欄 -->
                <div>
                    <input type="text" name="title" class="my-2 mb-4 mt-4 border rounded bg-white" placeholder="タイトルを入力">
                </div>
                <!-- 登録内容入力欄 -->
                <textarea name="body" id="" class="mb-4 mt-4 border w-100 h-50 rounded bg-white" placeholder="登録内容入力"></textarea>
                <!-- 各ボタン機能 -->
                <div class="flex mt-4">
                    <!-- 戻るボタン -->
                    <div class="px-1 py-3">
                        <button type="button" class="bg-white border-4 border-sky-700 w-30 h-15 px-10 py-2 rounded" onclick="history.back()">戻る</button>
                    </div>
                    <!-- 登録ボタン -->
                    <div class="px-38 py-3">
                        <button type="submit" class="bg-white border-4 border-sky-700 w-30 h-15 px-10 py-2 rounded">登録</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>