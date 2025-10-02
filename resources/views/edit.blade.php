<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  @vite('resources/css/app.css')
  <title>編集ページ</title>
</head>
<body class="bg-gradient-to-l from-indigo-300 via-blue-200 to-sky-200">
  <h1 class="font-bold text-sky-700 text-xl mb-2 pl-3 pt-3"><i class="bi bi-file-earmark-slides-fill"></i>Dramas Thought</h1>
  <hr class="border-dashed">
  <div class="px-130">
    <form action="{{ route('drama.update', ['id' =>$drama->id]) }}" method="POST" enctype="multipart/form-data" class="my-5">
      @csrf
      @method("PUT")
      <select name="country" class="my-2 bg-white border-1 border-solid border rounded">
        <option value="Japan" {{ old('country', $drama->country ?? '') === 'Japan' ? 'selected' : '' }}>Japan</option>
        <option value="Korean" {{ old('country', $drama->country ?? '') === 'Korean' ? 'selected' : '' }}>Korean</option>
        <option value="Thailand" {{ old('country', $drama->country ?? '') === 'Thailand' ? 'selected' : '' }}>Thailand</option>
        <option value="America" {{ old('country', $drama->country ?? '') === 'America' ? 'selected' : '' }}>America</option>
        <option value="Other" {{ old('country', $drama->country ?? '') === 'Other' ? 'selected' : '' }}>Other</option>
      </select>
      <div>
        <input type="text" name="title" class="my-2 mb-4 border rounded bg-white" placeholder="タイトルを入力" value="{{ old('title', $drama->title) }}">
      </div>
      <textarea name="body" id="" class="mb-4 border w-100 h-50 rounded bg-white" placeholder="感想を入力">{{ old('title', $drama->body) }}</textarea>
      <div>
        <input type="file" name="image" class="my-2 mb-4 w-100 h-30 border rounded bg-white">
      </div>
      <div class="flex">
        <div class="px-1 py-3">
          <button type="button" class="bg-white border-4 border-sky-700 w-30 h-15 px-10 py-2 rounded" onclick="history.back()">戻る</button>
        </div>
        <div class="px-38 py-3">
          <button type="submit" class="bg-white border-4 border-sky-700 w-30 h-15 px-10 py-2 rounded">編集</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>