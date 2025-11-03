<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
  @vite('resources/css/app.css')
  <title>投稿ページ</title>
</head>

<body class="bg-gradient-to-l from-indigo-300 via-blue-200 to-sky-200">
  <!-- アプリタイトル -->
  <h1 class="font-bold text-sky-700 text-xl mb-2 pl-3 pt-3"><i class="bi bi-file-earmark-slides-fill"></i><a href="{{ route('drama.index') }}">Dramas Thought</a></h1>
  <!-- アプリタイトルの下線 -->
  <hr class="border-dashed">

  <!-- 投稿フォーム ここから -->
  <div class="px-130">
    <form action="{{ route('drama.store') }}" method="POST" enctype="multipart/form-data" class="my-5">
      @csrf
      <!-- 国カテゴリ選択 -->
      <select name="country" class="my-2 bg-white border-1 border-solid border rounded">
        <option value="Japan">Japan</option>
        <option value="Korean">Korean</option>
        <option value="Thailand">Thailand</option>
        <option value="America">America</option>
        <option value="Other">Other</option>
      </select>
      <!-- タイトル入力欄 -->
      <div>
        <input type="text" name="title" class="my-2 mb-4 border rounded bg-white" placeholder="タイトルを入力">
      </div>
      <!-- 感想入力欄 -->
      <textarea name="body" id="" class="mb-4 border w-100 h-50 rounded bg-white" placeholder="感想を入力"></textarea>
      <!-- <div id="quill_editor" class="mb-4 border w-100 h-50 rounded bg-white"></div>
      <input type="hidden" name="body" id="hidden_body"> -->
      <!-- 画像 -->
      <div>
        <input type="file" name="image" class="my-2 mb-4 w-100 h-30 border rounded bg-white">
      </div>

      <!-- 各ボタン機能 -->
      <div class="flex">
        <!-- 戻るボタン -->
        <div class="px-1 py-3">
          <button type="button" class="bg-white border-4 border-sky-700 w-30 h-15 px-10 py-2 rounded" onclick="history.back()">戻る</button>
        </div>
        <!-- 投稿ボタン -->
        <div class="px-38 py-3">
          <button type="submit" class="bg-white border-4 border-sky-700 w-30 h-15 px-10 py-2 rounded">投稿</button>
        </div>
      </div>
    </form>
  </div>
  <!-- ここまで -->
<!-- <script>
  const quill = new Quill('#quill_editor', {
    theme: 'snow',
    placeholder: "感想を入力",
  });

  const form = document.querySelector('form');
  form.addEventListener('submit', function() {
    const hiddenInput = document.querySelector('#hidden_body');
    hiddenInput.value = quill.root.innerHTML;
  });
</script> -->
</body>

</html>