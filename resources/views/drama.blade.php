<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Dramas Thought〜ドラマ感想掲示板〜</title>
</head>

<body>
  <h1 class="font-bold text-xl mb-2 pl-3 pt-3">Dramas Thought</h1>
  <hr class="border-dashed">
  <div class="flex justify-between items-center px-6 pt-2">
    <ul class="flex px-3 space-x-6">
      <li><a href="">Japan</a></li>
      <li><a href="">Korean</a></li>
      <li><a href="">Thailand</a></li>
      <li><a href="">America</a></li>
      <li><a href="">Other</a></li>
    </ul>
    <form action="{{ route('drama.create') }}" method="POST">
      @csrf
      <button type="submit" class="bg-blue-400 text-white px-4 py-2 rounded hover:bg-blue-600">＋投稿</button>
    </form>
  </div>
  <div class="flex flex-row p-2 gap-8 justify-center">
    @foreach ($dramas as $drama )
    <div class="w-70 h-70 bg-blue-100 rounded-lg shadow-lg overflow-hidden">
      <div class="p-6">
        <form action="{{ route('drama.destroy', $drama->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか');">
          @csrf
          @method('DELETE')
          <button type="submit" class="w-14 h-5 px-4 bg-blue-400 text-white text-xs rounded-md hover:bg-red-300">削除</button>
        </form>
        <h2 class="text-lg font-bold mb-2">{{ $drama->title }} （{{ $drama->country }}）</h2>
        <p class="mb-4">{{ $drama->body }}</p>
        @if ($drama->image_path)
        <img src="{{ asset($drama->image_path) }}" alt="画像" class="w-60 h-30 rounded">
        @endif
      </div>
    </div>
    @endforeach
  </div>
</body>

</html>