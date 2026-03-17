<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  @vite('resources/css/app.css')
  <title>ドラマカレンダー</title>
</head>

<body class="bg-gradient-to-l from-indigo-300 via-blue-200 to-sky-200">
  <div class="px-30 py-7">
    <div id='calendar' data-events='@json($events)' class="w-300 h-150 p-10 border-3 border-blue-900 border-solid bg-white rounded" onclick=""></div>
  </div>
  <div class="px-10 pb-3 text-lg">
    <a href="{{ route('main.index') }}">メインページへ戻る</a>
    <a href="{{ route('calendarRegister.create') }}">登録</a>
  </div>

  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js'></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      // PHP から渡された $events を JSON化
      var eventsData = JSON.parse(calendarEl.getAttribute('data-events'));

      // --- 国ごとの色を定義 ---
      const countryColors = {
        'Japan': '#FF4F50',
        'Korean': '#FF8C00',
        'Thailand': '#4169e1',
        'America': '#008b8b',
        'Other': '#33CCCC',
      }

      // --- 各イベントに色を割り当てる ---
      const coloredEvents = eventsData.map(event => {
        return {
          ...event,
          backgroundColor: countryColors[event.country] || '#3788d8',
          borderColor: countryColors[event.country] || '#3788d8'
        }
      })

      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'ja',
        events: coloredEvents,

        // --- 各登録した内容をクリックしたときの処理 ---
        // eventClick: function(info) {
        //   console.log('クリックされたイベント全データ：', info.event)
        //   console.log('カスタムデータ（bodyなど）：', info.event.expendedProps);

          // データの取り出し
          // info.event.expendedProps の中に、titleやstart以外の独自のデータ（bodyなど）が入っている
          // const title = info.event.title;
          // const body = info.event.expendedProps.body || '詳細はありません';
          // const country = info.event.expendedProps.country;

          // if (body) {
          //   alert(" 【" + country + "】" + title + "\n\n内容 : \n" + body);
          // } else {
          //   alert("【" + country + "】" + title + "\n内容が登録されていません");
          // }
        // }
      });

      calendar.render();
    });
  </script>
</body>

</html>