<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    <title>メインページ</title>
</head>

<body class="bg-gradient-to-l from-indigo-300 via-blue-200 to-sky-200">
    <div class="flex space-x-10 justify-center pt-50">
        <div class="p-25 w-70 h-70 bg-white rounded group relative inline-flex h-12 items-center justify-center overflow-hidden rounded-md border border-neutral-200 bg-transparent px-6 font-medium text-neutral-600 transition-all duration-100 [box-shadow:5px_5px_rgb(82_82_82)] active:translate-x-[3px] active:translate-y-[3px] active:[box-shadow:0px_0px_rgb(82_82_82)]">
            <a href="{{ route('drama.index') }}">
                ドラマの感想を書く！
            </a>
        </div>
        <div class="p-25 w-70 h-70 bg-white rounded">
            <a href="{{ route('calendar.index') }}">ドラマカレンダー作成へ</a>
        </div>
    </div>
</body>

</html>