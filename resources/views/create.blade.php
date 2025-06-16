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
    <form action="" method="POST">
      @csrf
      <select name="country" class="py-5">
        <option value="Japan">Japan</option>
        <option value="Korean">Korean</option>
        <option value="Thailand">Thailand</option>
        <option value="America">America</option>
        <option value="Other">Other</option>
      </select>
      <br>
      <div>
        <input type="text" class="border rounded" placeholder="タイトルを入力">
      </div>
      <br>
      <textarea name="" id="" class="border w-100 h-80 rounded" placeholder="感想を入力"></textarea>
    </form>
    <div class="px-75">
      <button class="bg-lime-200 h-10 px-10 py-2 rounded hover:bg-yellow-200">投稿</button>
    </div>
  </div>
</body>

</html>