@include('layouts.app')
@section('title','クイズの一覧')
<div class="container">
  <h1>クイズの一覧を表示するよ ♪</h1>
  <table class="table table-striped">
  <thead>
    <tr>
      <th>クイズID</th>
      <th>問題</th>
    </tr>
  </thead>
  <tbody>
    @foreach($quizzes as $quiz)
    <tr>
      <td>{{ $quiz->id}}</td>
      <td>{{ $quiz->question}}</td>
      @if($user_id === 4)
        <td><a href="/edit/{{ $quiz->id }}">編集するよ ♪</a></td>
        <td><a href="/delete/{{ $quiz->id }}">削除するよ ♪ </a></td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>