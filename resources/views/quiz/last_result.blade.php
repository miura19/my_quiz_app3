@include('layouts.app')
  <div class="container">
    <h1>全てのクイズが終了したよ ♪</h1>
    <div class="result">
      @if($my_answer == $answer)
        <h1>正解だよ</h1>
        <img class='answer_image'src="/images/正解.jpg" alt="">
      @else
        <h1>不正解だよ</h1>
        <img class='answer_image'src="/images/不正解.jpg" alt="">
      @endif  
      <p class='description'>{{ $quizz->description }}</p>
    </div>
    <a class="btn btn-primary" href="/home" role="button">ホームへ戻るよ ♪</a>
  </div>
</body>
</html>