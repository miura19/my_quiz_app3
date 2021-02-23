  @include('layouts.app')
  <div class="container">
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
    <a class="answer_btn btn btn-primary" href="/quiz/{{ $nextQuiz->id }}" role="button">次のクイズに挑戦する ♪</a>
  </div>
</body>
</html>