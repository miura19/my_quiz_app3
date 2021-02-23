@include('layouts.app')
<div class="container">
  <form action="{{ url('/create') }}" method='POST'>
    {{ csrf_field() }}
    <div class="form-group">
      <label for="quizz_janre">ジャンルを選択してね ♪</label>
      <select name="quizz_janre" class="quizz_janre　form-control">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
      <div class="alert alert-danger">
        正解の回答はいずれかの選択肢のテキストと一致させてください！！！
      </div>
    <div class="form-group">
      <label for="question">問題を作成してね ♪</label>
      <input type="text" name='question' class="form-control"  placeholder="HTMLとは何という単語の略？">
    </div>
    <div class="form-group">
      <label for="answer">選択肢 1</label>
      <input type="text" name='answer1' class="form-control"  placeholder="HyperText Markup Language">
    </div>
    <div class="form-group">
      <label for="answer">選択肢 2</label>
      <input type="text" name='answer2' class="form-control"  placeholder="HighTechnology Markup Language">
    </div>
    <div class="form-group">
      <label for="answer">選択肢 3</label>
      <input type="text" name='answer3' class="form-control"  placeholder="HighTechnician Myname Legend">
    </div>
    <div class="form-group">
      <label for="answer">選択肢 4</label>
      <input type="text" name='answer4' class="form-control"  placeholder="HiphopTarget Matrix Legacy">
    </div>
    <div class="form-group">
      <label for="answer">正解の回答を選択肢の1~4の番号と同じテキストのように入力してね ♪</label>
      <input type="text" name="answer" class="answer form-control"
      placeholder="HyperText Markup Language">
    </div>
    <div class="form-group">
      <label for="description">正解の回答を軽く解説してね ♪</label>
      <input type="text" name='description' class="form-control"  placeholder="「HyperText Markup Language」(ハイパーテキスト マークアップ ランゲージ)の略だよ ♪">
    </div>
    <button type="submit" id='create_btn' class="btn btn-primary create_btn">クイズを作成するよ ♪</button>
  </form>
</div>
</body>
</html>