<html dir="rtl">

<head>
  <title></title>
  <style>
    .q {
      border: solid 5px transparent;
      border-radius: 4px;
      background: linear-gradient(rgb(255 255 255), rgb(255 255 255)) padding-box, linear-gradient(to bottom right, #1f005c, #5b0060, #870160, #ac255e, #ca485c, #e16b5c, #f39060, #ffb56b) border-box;
      direction: rtl;
      margin-bottom: 2%;
      margin-bottom: 20px;
      text-align: right;
      padding: 10px;
    }

    .a {
      border: solid 5px transparent;
      border-radius: 4px;
      background: linear-gradient(rgb(255 255 255), rgb(255 255 255)) padding-box, linear-gradient(to bottom right, #1f005c, #5b0060, #870160, #ac255e, #ca485c, #e16b5c, #f39060, #ffb56b) border-box;
      direction: rtl;
      text-align: right;
      padding: 10px;
    }

    .ans {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10% 1%;
    }

    .qu {
      margin: 3%;
    }

    .but1 {
      border: none;
      border-radius: 7px;
      color: white;
      margin: 1%;
    }

    .del {
      background: red;
    }

    .edi {
      background: green;
    }

    .grid-container {
      display: grid;
      height: 50px;
      direction: rtl;
      grid-template-columns: 1fr 2fr 2fr 1fr;
      grid-template-rows: 100%;
      text-align: center;
      align-items: center;
      font-size: 130%;
      margin-left: 5px;
      margin-right: 5px;
    }

    .img {
      /* width: 100%; */
      height: 100%;
    }

    hr {
      border: none;
      background: #a1cedb;
      width: 100%;
      height: 2px;
    }

    body {
      margin: 0;
    }

    #qu {
      margin-left: 5px;
      margin-right: 5px;

    }
  </style>
</head>

<body>
<?php $n=1; ?>
  @foreach ($exams as $exam)
  <div class="exam">
    <div class="grid-container">
      <div><img class="img" src="./assets/img/almanhalpng.png" /></div>
      <div>الميسترو   </div>
      <div id="form">نموزج الامتحان:{{$n}}</div>
      <?php $n++; ?>

    </div>
    <hr />
    <div id="qu">
      <?php $i = 1; ?>
     @foreach ($exam as $question)
        
     <div id="text">
       <div class="q">
         <div>({{$i}}) <?php echo $question->text; ?></div>
        </div>
        <div class="ans">
          <div class="a">
            <div>(ا) <?php echo $question->a1; ?></div>
          </div>
          <div class="a">
            <div>(ب) <?php echo $question->a2; ?></div>
          </div>
          <div class="a">
            <div>(ج) <?php echo $question->a3; ?></div>
          </div>
          <div class="a">
            <div>(د) <?php echo $question->a4; ?></div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <?php $i++; ?>
      @endforeach
    </div>
  </div>
  @endforeach
 
</body>


</html>