<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>投稿ページ</title>
</head>

<body>
  <h1 class="font-bold text-xl mb-2 pl-3 pt-3">Dramas Thought</h1>
  <hr class="border-dashed">
  <div class="px-130">
    <form action="{{ route('drama.store') }}" method="POST">
      @csrf
      <select name="country" class="py-5">
        <option value="Japan">Japan</option>
        <option value="Korean">Korean</option>
        <option value="Thailand">Thailand</option>
        <option value="America">America</option>
        <option value="Other">Other</option>
      </select>
      <div>
        <input type="text" name="title" class="mb-4 border rounded" placeholder="タイトルを入力">
      </div>
      <textarea name="body" id="" class="mb-4 border w-100 h-50 rounded" placeholder="感想を入力"></textarea>
      <div>
        <input type="file" name="image" class="mb-4 w-100 h-30 border rounded">
      </div>
      <div class="px-70 py-3">
        <button type="submit" class="bg-lime-200 w-30 h-15 px-10 py-2 rounded hover:bg-yellow-200">投稿</button>
      </div>
      <div class="px-10">
        <button type="button" onclick="history.back()">戻る</button>
      </div>
    </form>
  </div>
</body>

</html>