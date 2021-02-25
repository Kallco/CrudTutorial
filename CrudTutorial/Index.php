<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    h1 {text-align: center;}
    table {text-align: center;}
    td,th {text-align: left;}
    div {text-align: center;}
    </style>
    <meta charset="utf-8">
    <title>CrudApp</title>
  </head>
  <body>
    <div class="container">
        <h1>Todo List</h1>
        <button type="button" class="btn btn sucess pull-left" style="background-color: Lightgreen;"> Add Task</button>
        <button type="button" class="btn btn default pull-right" style="background-color: Lightgrey;"> Print</button>
        <br> <hr>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
            <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Task</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
              </tr>
            </tbody>
            </table>
      </div>
    </div>


  </body>



  <!-- //jquery CDN installation -->
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <!--//bootstrap javascript CND installation -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
  crossorigin="anonymous"></script>
  <!-- //bootstrap css CND installation -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
  crossorigin="anonymous">
    <!-- Create a style sheet for centering text -->
</html>
