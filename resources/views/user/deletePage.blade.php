@extends("CSS-related.bootstrapTest")
@section('xxx')
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <style>


      body {
        text-align: center;
        background: #EBF0F5;
        background-color: #222222
      }
      h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
          margin-top: 20px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
   
  </head>
    
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #FEDE98; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
      <br>
        <h1>Success</h1> 
        <br>
        <p>Project details have been deleted.</p>
      </div>
@stop
    