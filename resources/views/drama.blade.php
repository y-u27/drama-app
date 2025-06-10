<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Drama Thoughts〜ドラマ感想掲示板〜</title>
</head>

<body>
  <div></div>
  <h1 class="font-bold text-xl mb-2 text-center pt-3">Drama Thoughts</h1>
  <hr class="border-dashed">
  <div class="">
  <ul class="flex px-3 space-x-6">
    <li><a href="">Japan</a></li>
    <li><a href="">Korean</a></li>
    <li><a href="">Thailand</a></li>
    <li><a href="">America</a></li>
    <li><a href="">Other</a></li>
  </ul>
</div>
<button>＋投稿</button>
  <div class="flex flex-wrap p-10 gap-8 justify-center">
    @foreach ($dramas as $drama )
    <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden">
      <div class="p-4">
        <div>
          <h2 class="font-bold mb-2">{{ $drama->title }} （{{ $drama->country }}）</h2>
        </div>
        <p>{{ $drama->body }}</p>
        @if ($drama->image_path)
        <img src="{{ asset('storage/drama' . $drama->image_path) }}" alt="画像" class="max-width-300">
        @endif
      </div>
    </div>
    @endforeach
  </div>
</body>

</html>