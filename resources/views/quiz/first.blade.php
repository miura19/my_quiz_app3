@include('layouts.app')
<div class="container">
  <div class="question">
      <div class="title">
        <p class='category'>カテゴリー</p>
        <p id="category">カテゴリー名が入ります</p>
      </div>
      <div><h1 id='quizz_number'>第1問</h1></div>
      <div><h2 id='question'>Question</h2></div>
      <ul>
        <li id='answer1' class="btn btn-primary answer_btn">answer1</li>
        <li id='answer2' class="btn btn-primary answer_btn">answer2</li>
        <li id='answer3' class="btn btn-primary answer_btn">answer3</li>
        <li id='answer4' class="btn btn-primary answer_btn">answer4</li>
      </ul>
  </div>
  <div id="ok_text">正解だよ♪</div>
  <div id="ng_text">不正解だよ、、、</div>
  <div id="description">解説が入ります。</div>
  <div><img id="image_ok" src="/images/正解.jpg" alt="正解の画像です"></div>
  <div><img id="image_ng" src="/images/不正解.jpg" alt="不正解の画像です"></div>
  <div id="next_quiz_btn" class="btn btn-primary">次の問題に進むよ♪</div>

</div>
<script>
  const quizz = @json($quizz[0]);
  const quizzes = @json($quizz);

  const category_name = @json($category_name);
  console.log(category_name);
  console.log(quizzes);

  const question_number = ['第1問','第2問','第3問','第4問','第5問','第6問','第7問','第8問','第9問','第10問'];
  
  //カテゴリー名
  const category = document.getElementById('category');

  //正解不正解の画像
  const image_ok = document.getElementById('image_ok');
  image_ok.style.display ="none";
  const image_ng = document.getElementById('image_ng');
  image_ng.style.display ="none";

　//正解不正解の文言
  const ok_text = document.getElementById('ok_text');
  ok_text.style.display ="none";
  const ng_text = document.getElementById('ng_text');
  ng_text.style.display ="none";

  //クイズの解説が入ります
  const quiz_description = document.getElementById('description');
  quiz_description.style.display ="none";

  //次の問題へ進むボタン
  const next_quiz_btn = document.getElementById('next_quiz_btn');
  next_quiz_btn.style.display ="none";
 
  //1問目のクイズの問題と選択肢を表示する
  const setUpQuiz = () =>{
    window.addEventListener('load',() =>{
    if(quizzes[0].category_id === 4){
    category.textContent = category_name[0].name;
    }else if(quizzes[0].category_id === 14){
      category.textContent = category_name[1].name;
    }else if(quizzes[0].category_id === 24){
      category.textContent = category_name[2].name;
    }else if(quizzes[0].category_id === 34){
      category.textContent = category_name[3].name;
    }else if(quizzes[0].category_id === 44){
      category.textContent = category_name[4].name;  
    }else if(quizzes[0].category_id === 54){
      category.textContent = category_name[5].name;
    }else if(quizzes[0].category_id === 64){
      category.textContent = category_name[6].name;
    }else if(quizzes[0].category_id === 74){
      category.textContent = category_name[7].name;
    }else if(quizzes[0].category_id === 84){
      category.textContent = category_name[8].name;
    }
    const question = document.getElementById('question');
    question.textContent = quizz.question;

    const answer1 = document.getElementById('answer1');
    const answer2 = document.getElementById('answer2');
    const answer3 = document.getElementById('answer3');
    const answer4 = document.getElementById('answer4');
    answer1.textContent = quizzes[now_quiz].answer1;
    answer2.textContent = quizzes[now_quiz].answer2;
    answer3.textContent = quizzes[now_quiz].answer3;
    answer4.textContent = quizzes[now_quiz].answer4;

    quiz_description.textContent = quizzes[now_quiz].description;
    });
  }

  setUpQuiz();

  //現在n問目
  let now_quiz = 0;
  //正解数
  let score = 0;
  //問題数
  const quizLength = quizzes.length;
  //第n問
  let quizz_numbers = document.getElementById('quizz_number');

  //2問目以降に呼び出す問題と選択肢
  const nextQuiz = () => {
    now_quiz++;
    quizz_numbers.textContent = question_number[now_quiz];

    const question = document.getElementById('question');
    question.textContent = quizzes[now_quiz].question;
    const answer1 = document.getElementById('answer1');
    const answer2 = document.getElementById('answer2');
    const answer3 = document.getElementById('answer3');
    const answer4 = document.getElementById('answer4');
    answer1.textContent = quizzes[now_quiz].answer1;
    answer2.textContent = quizzes[now_quiz].answer2;
    answer3.textContent = quizzes[now_quiz].answer3;
    answer4.textContent = quizzes[now_quiz].answer4;

    quiz_description.textContent = quizzes[now_quiz].description;

    if(quizzes[now_quiz].category_id === 4){
    category.textContent = category_name[0].name;
    }else if(quizzes[now_quiz].category_id === 14){
      category.textContent = category_name[1].name;
    }else if(quizzes[now_quiz].category_id === 24){
      category.textContent = category_name[2].name;
    }else if(quizzes[now_quiz].category_id === 34){
      category.textContent = category_name[3].name;
    }else if(quizzes[now_quiz].category_id === 44){
      category.textContent = category_name[4].name;
    }else if(quizzes[now_quiz].category_id === 54){
      category.textContent = category_name[5].name;
    }else if(quizzes[now_quiz].category_id === 64){
      category.textContent = category_name[6].name;
    }else if(quizzes[now_quiz].category_id === 74){
      category.textContent = category_name[7].name;
    }else if(quizzes[now_quiz].category_id === 84){
      category.textContent = category_name[8].name;
    }

    if(answer1.style.pointerEvents = "none",
       answer2.style.pointerEvents = "none",
       answer3.style.pointerEvents = "none",
       answer4.style.pointerEvents = "none"){
       answer1.style.pointerEvents = "auto";
       answer2.style.pointerEvents = "auto";
       answer3.style.pointerEvents = "auto";
       answer4.style.pointerEvents = "auto";
      }
  };
 
  //回答が正解でも不正解でも、問題数(5問)になるまでnextQuiz()を呼び出す。正解だったらscore++する。
  answer1.addEventListener('click',()=>{
    if(quizzes[now_quiz].answer1 === quizzes[now_quiz].answer){
      score++;
      if(confirm('この回答で本当によろしいですか？')){
      if(image_ok.style.display ="none",
         ok_text.style.display ="none",
         next_quiz_btn.style.display ="none",
         quiz_description.style.display ="none"){
         image_ok.style.display ="block";
         ok_text.style.display ="block";
         next_quiz_btn.style.display ="block";
         quiz_description.style.display="block";
        }
        answer1.style.pointerEvents = "none"
        answer2.style.pointerEvents = "none"
        answer3.style.pointerEvents = "none"
        answer4.style.pointerEvents = "none"
      }else{}  
     } else {
      if(confirm('この回答で本当によろしいですか？')){
      if(image_ng.style.display ="none",
        ng_text.style.display ="none",
        next_quiz_btn.style.display ="none",
        quiz_description.style.display ="none"){
        image_ng.style.display ="block";
        ng_text.style.display ="block";
        next_quiz_btn.style.display ="block";
        quiz_description.style.display ="block";
        }
        answer1.style.pointerEvents = "none"
        answer2.style.pointerEvents = "none"
        answer3.style.pointerEvents = "none"
        answer4.style.pointerEvents = "none"
      }  
    }
  });

  answer2.addEventListener('click',()=>{
    if(quizzes[now_quiz].answer2 === quizzes[now_quiz].answer){
      score++;
      if(confirm('この回答で本当によろしいですか？')){
      if(image_ok.style.display ="none",
         ok_text.style.display ="none",
         next_quiz_btn.style.display ="none",
         quiz_description.style.display ="none"){
         image_ok.style.display ="block";
         ok_text.style.display ="block";
         next_quiz_btn.style.display ="block";
         quiz_description.style.display ="block";
        }
        answer1.style.pointerEvents = "none"
        answer2.style.pointerEvents = "none"
        answer3.style.pointerEvents = "none"
        answer4.style.pointerEvents = "none"
      }else{}  
     } else {
      if(confirm('この回答で本当によろしいですか？')){
      if(image_ng.style.display ="none",
         ng_text.style.display ="none",
         next_quiz_btn.style.display ="none",
         quiz_description.style.display ="none"){
         image_ng.style.display ="block";
         ng_text.style.display ="block";
         next_quiz_btn.style.display ="block";
         quiz_description.style.display ="block";
        }
        answer1.style.pointerEvents = "none"
        answer2.style.pointerEvents = "none"
        answer3.style.pointerEvents = "none"
        answer4.style.pointerEvents = "none"
      }
     }  
  });

  answer3.addEventListener('click',()=>{
    if(quizzes[now_quiz].answer3 === quizzes[now_quiz].answer){
      score++;
      confirm('この回答で本当によろしいですか？');
      if(image_ok.style.display ="none",
         ok_text.style.display ="none",
         next_quiz_btn.style.display ="none",
         quiz_description.style.display ="none"){
         image_ok.style.display ="block";
         ok_text.style.display ="block";
         next_quiz_btn.style.display ="block";
         quiz_description.style.display ="block";
        }
        answer1.style.pointerEvents = "none"
        answer2.style.pointerEvents = "none"
        answer3.style.pointerEvents = "none"
        answer4.style.pointerEvents = "none"
     } else {
      confirm('この回答で本当によろしいですか？');
      if(image_ng.style.display ="none",
         ng_text.style.display ="none",
         next_quiz_btn.style.display ="none",
         quiz_description.style.display ="none"){
         image_ng.style.display ="block";
         ng_text.style.display ="block";
         next_quiz_btn.style.display ="block";
         quiz_description.style.display ="block";
        }
        answer1.style.pointerEvents = "none"
        answer2.style.pointerEvents = "none"
        answer3.style.pointerEvents = "none"
        answer4.style.pointerEvents = "none"
      }
  });

  answer4.addEventListener('click',()=>{
    if(quizzes[now_quiz].answer4 === quizzes[now_quiz].answer){
      score++;
      confirm('この回答で本当によろしいですか？');
      if(image_ok.style.display ="none",
         ok_text.style.display ="none",
         next_quiz_btn.style.display ="none",
         quiz_description.style.display ="none"){
         image_ok.style.display ="block";
         ok_text.style.display ="block";
         next_quiz_btn.style.display ="block";
         quiz_description.style.display ="block";
        }
        answer1.style.pointerEvents = "none"
        answer2.style.pointerEvents = "none"
        answer3.style.pointerEvents = "none"
        answer4.style.pointerEvents = "none"
     } else {
      confirm('この回答で本当によろしいですか？');
      if(image_ng.style.display ="none",
         ng_text.style.display ="none",
         next_quiz_btn.style.display ="none",
         quiz_description.style.display ="none"){
         image_ng.style.display ="block";
         ng_text.style.display ="block";
         next_quiz_btn.style.display ="block";
         quiz_description.style.display ="block";
        }  
        answer1.style.pointerEvents = "none"
        answer2.style.pointerEvents = "none"
        answer3.style.pointerEvents = "none"
        answer4.style.pointerEvents = "none"
      }
  });

    next_quiz_btn.addEventListener("click", () => {
      if(image_ok.style.display ="block",ok_text.style.display ="block",next_quiz_btn.style.display ="block",image_ng.style.display ="block",ng_text.style.display ="block",quiz_description.style.display ="block"){
        image_ok.style.display ="none";
        ok_text.style.display ="none";
        next_quiz_btn.style.display ="none";
        image_ng.style.display ="none";
        ng_text.style.display ="none";
        quiz_description.style.display ="none"
      }

      if(now_quiz < quizzes.length-1){
        nextQuiz();
     } else {
       alert('お疲れさまでした！'+ quizLength + '問中' + score + '問正解しました！');
       location.href = '/home';
     }
    });
</script>
</body>

</html>