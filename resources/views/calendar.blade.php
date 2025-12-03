<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  @vite('resources/css/app.css')
  <title>ドラマカレンダー</title>
</head>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth'
    });
    calendar.render();
  });
</script>

<body class="bg-gradient-to-l from-indigo-300 via-blue-200 to-sky-200">
  <div class="px-30 py-10">
    <div id='calendar' class="w-300 h-150 p-10 border-3 border-blue-900 border-solid bg-white rounded"></div>
  </div>
  <a href="{{ route('main.index') }}">メインページへ戻る</a>
</body>

</html>