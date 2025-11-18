<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  @vite('resources/css/app.css')
  <title>Dramas Thought〜ドラマ感想掲示板〜</title>
</head>

<body class="bg-gradient-to-l from-indigo-300 via-blue-200 to-sky-200">
  <!-- アプリタイトル -->
  <h1 class="font-bold text-sky-700 text-xl mb-2 pl-3 pt-3"><i class="bi bi-file-earmark-slides-fill"></i><a href="{{ route('drama.index') }}">Dramas Thought</a></h1>
  <!-- アプリタイトルの下線 -->
  <hr class="border-dashed">

  <!-- カテゴリ機能 ここから -->
  <div class="flex justify-between items-center px-6 pt-2">
    <ul class="flex px-3 space-x-6">
      <!-- カテゴリ：すべて -->
      <li><a href="{{ route('drama.index') }}" role="link" class="relative bg-[linear-gradient(#262626,#262626),linear-gradient(#7B3CFF,#7B3CFF)] bg-[length:100%_2px,0_2px] bg-[position:100%_100%,0_100%] bg-no-repeat text-neutral-950 transition-[background-size,color] duration-500 hover:bg-[0_2px,100%_2px] hover:text-[#7B3CFF]">All</a></li>

      <!-- カテゴリ：日本 -->
      <li><a href="{{ route('drama.category', 'Japan') }}" role="link" class="relative bg-[linear-gradient(#262626,#262626),linear-gradient(#FF4F50,#FF4F50)] bg-[length:100%_2px,0_2px] bg-[position:100%_100%,0_100%] bg-no-repeat text-neutral-950 transition-[background-size,color] duration-500 hover:bg-[0_2px,100%_2px] hover:text-[#FF4F50]">Japan</a></li>

      <!-- カテゴリ：韓国 -->
      <li><a href="{{ route('drama.category', 'Korean') }}" role="link" class="relative bg-[linear-gradient(#262626,#262626),linear-gradient(#FF8C00,#FF8C00)] bg-[length:100%_2px,0_2px] bg-[position:100%_100%,0_100%] bg-no-repeat text-neutral-950 transition-[background-size,color] duration-500 hover:bg-[0_2px,100%_2px] hover:text-[#FF8C00]">Korean</a></li>

      <!-- カテゴリ：タイ -->
      <li><a href="{{ route('drama.category', 'Thailand') }}" role="link" class="relative bg-[linear-gradient(#262626,#262626),linear-gradient(#4169e1,#4169e1)] bg-[length:100%_2px,0_2px] bg-[position:100%_100%,0_100%] bg-no-repeat text-neutral-950 transition-[background-size,color] duration-500 hover:bg-[0_2px,100%_2px] hover:text-[#4169e1]">Thailand</a></li>

      <!-- カテゴリ：アメリカ -->
      <li><a href="{{ route('drama.category', 'America') }}" role="link" class="relative bg-[linear-gradient(#262626,#262626),linear-gradient(#008b8b,#008b8b)] bg-[length:100%_2px,0_2px] bg-[position:100%_100%,0_100%] bg-no-repeat text-neutral-950 transition-[background-size,color] duration-500 hover:bg-[0_2px,100%_2px] hover:text-[#008b8b]">America</a></li>

      <!-- カテゴリ：その他 -->
      <li><a href="{{ route('drama.category', 'Other') }}" role="link" class="relative bg-[linear-gradient(#262626,#262626),linear-gradient(#33CCCC,#33CCCC)] bg-[length:100%_2px,0_2px] bg-[position:100%_100%,0_100%] bg-no-repeat text-neutral-950 transition-[background-size,color] duration-500 hover:bg-[0_2px,100%_2px] hover:text-[#33CCCC]">Other</a></li>
    </ul>
    
    <!-- 投稿作成ボタン -->
    <a href="{{ route('drama.create') }}" role="link" class="relative bg-[linear-gradient(#262626,#262626),linear-gradient(#043c78,#043c78)] bg-[length:100%_2px,0_2px] bg-[position:100%_100%,0_100%] bg-no-repeat text-neutral-950 transition-[background-size,color] duration-500 hover:bg-[0_2px,100%_2px] hover:text-[#043c78]">＋投稿</a>
  </div>
  <!-- ここまで -->

  <!-- 投稿記事 ここから -->
  <div class="flex flex-row p-6 gap-8 justify-center">
    @forelse ($dramas as $drama )
    <div class="w-70 h-116 bg-white rounded-lg shadow-xl/20 overflow-y-auto">
      <div class="p-5">
        <div class="flex items-center space-x-3">
          <!-- 編集ボタン -->
          <button type="submit" class="w-14 h-5 px-4 bg-blue-400 text-white text-xs rounded-md hover:bg-red-300"><a href="{{ route('drama.edit', $drama->id ) }}">編集</a></button>
          <!-- ここまで -->
          <!-- 削除ボタン -->
          <form action="{{ route('drama.destroy', $drama->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか');">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-14 h-5 px-4 mb-1 bg-blue-400 text-white text-xs rounded-md hover:bg-red-300">削除</button>
          </form>
          <!-- ここまで -->
        </div>
        <h2 class="text-lg font-bold mb-2">{{ $drama->title }} （{{ $drama->country }}）</h2>
        <p class="mb-4">{!! nl2br(htmlspecialchars($drama->body)) !!}</p>
        @if ($drama->image_path)
        <img src="{{ asset('storage/' . $drama->image_path) }}" alt="画像" class="w-60 h-70 rounded">
        @endif
      </div>
    </div>
    @empty
    <div class="m-50">
      <p class="text-center text-gray-600">投稿はまだありません</p>
    </div>
    @endforelse
  </div>
  <!-- ここまで -->

  <!-- ページネーション -->
  <div class="flex">
    <div class="p-2">
      <a href="{{ route('main.index') }}">メインページへ戻る</a>
    </div>
    <div class="pb-10 p-4 rounded">
      {{ $dramas->links('vendor.pagination.tailwind') }}
    </div>
  </div>
</body>

</html>