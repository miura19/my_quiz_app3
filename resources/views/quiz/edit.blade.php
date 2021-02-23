@include('layouts.app')
<div class="container">
  <form action="{{ url('/update/'.$quizzes->id) }}" method='POST'>
    {{ csrf_field() }}
    <div class="form-group">
      <label for="quizz_janre">ジャンルを選択してね ♪</label>
      <select name="quizz_janre" class="quizz_janre　form-control">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="question">問題を作成してね ♪</label>
      <input type="text" name='question' class="form-control"  placeholder="HTMLとは何という単語の略？" value='{{ $quizzes->question }}'>
    </div>
    <div class="form-group">
      <label for="answer">選択肢 1</label>
      <input type="text" name='answer1' class="form-control"  placeholder="HyperText Markup Language" value='{{ $quizzes->answer1 }}'>
    </div>
    <div class="form-group">
      <label for="answer">選択肢 2</label>
      <input type="text" name='answer2' class="form-control"  placeholder="HighTechnology Markup Language" value='{{ $quizzes->answer2 }}'>
    </div>
    <div class="form-group">
      <label for="answer">選択肢 3</label>
      <input type="text" name='answer3' class="form-control"  placeholder="HighTechnician Myname Legend" value='{{ $quizzes->answer3 }}'>
    </div>
    <div class="form-group">
      <label for="answer">選択肢 4</label>
      <input type="text" name='answer4' class="form-control"  placeholder="HiphopTarget Matrix Legacy" value='{{ $quizzes->answer4 }}'>
    </div>
    <div class="form-group">
      <label for="answer">正解を選択肢の1~4の番号と同じように入力してね ♪</label>
      <input type="text" name="answer" class="answer form-control"
      placeholder="HyperText Markup Language" value='{{ $quizzes->answer }}'>  
    </div>
    <div class="form-group">
      <label for="description">正解を軽く説明してね ♪</label>
      <input type="text" name='description' class="form-control"  placeholder="「HyperText Markup Language」(ハイパーテキスト マークアップ ランゲージ)の略だよ ♪" value='{{ $quizzes->description }}'>
    </div>
    <button type="submit" class="create_btn btn btn-primary">クイズを編集するよ ♪</button>
  </form>
</div>
</body>
</html>