<!DOCTYPE html>
<html>
<head>
  <title>Title</title>
  <link rel="stylesheet" href="../css/app.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>

<div class="content container">
<!--
  Here we need at add a js function so that on submit
  we decide if we are moving to a new proj
  or
  we are saving, deleteing, or creating a new project

  (for right now we will be creating a new project)
-->
  <form method="post" action="/project/{$project->projectId}">
    {{ csrf_field() }}
    <!--
      when submiting the form, need to check and find which submit button was pressed
      then change the _method to the approprite function
    -->
    <input type="hidden" name="_method" value="post">
    <div class="buttons">
      <form method="post" action="idkyet">
        {{ csrf_field() }}
        <div class="pull-left">
          <input type="submit" name="moveFirst" value="<|"><!-- POST -->
          <input type="submit" name="movePrevious" value="<"><!-- POST -->
          <input type="submit" name="moveNext" value=">"><!-- POST -->
          <input type="submit" name="moveLast" value="|>"><!-- POST -->
        </div>
      </form>

      <div class="pull-right">
        <form action="new" method="post">
          {{ csrf_field() }}
          <input type="submit" name="new" value="Add New"><!-- POST(to project/new) -->
        </form>
      </div>

        <form action="{{$project->projectId}}" method="post">
          {{ csrf_field() }}
          <div class="pull-right">
            <input type="hidden" name="_method" id="_method" value="post">
            <input type="submit" name="save" value="Save Changes"><!-- POST -->
            <input type="submit" name="delete" id="delete" value="Delete"><!-- DELETE -->
          </div>
          <div class="clearfix"></div>
          <p>Record # of #</p>
          <div class="inputs">
            <ul class="pull-left">
              <li>Project ID: {{ $project['projectId']}}</li>
              <li><label for="projTitle">Project Title:<input type="text" name="projTitle" id="projTitle" value="{{ $project->projectTitle }}"></label></li>
              <li><label for="">Project Description:<textarea  name="description" id="textarea" >{{$project->projectDescription}}</textarea></label></li>
              <li>
              <!-- Needs a script at the bottom to switch to the right priority -->
                <label for="priority">Priority
                  <select name="priority" id="priority">
                    <option value="temp">temp</option>
                  </select>
                </label>
              </li>
            </ul>
            <ul class="pull-right">
              <li><label for="referenceNum">Reference/Matter #:<input type="text" name="referenceNum" id="referenceNum" value="{{$project->referenceNum}}"></label></li>
              <li><label for="budget">Money Budget:<input type="number" name="budget" id="budget" value="{{$project->moneyBudget}}"></label></li>
              <li><label for="budgetLeft">Money to Date:<input type="number" name="budgetLeft" id="budgetLeft" value="{{$project->moneyToDate}}"></label></li>
              <li><label for="budgetHours">Hours Budget:<input type="number" name="budgetHours" id="budgetHours" value="{{$project->hoursBudget}}"></label></li>
              <li><label for="hoursLeft">Hours to Date:<input type="number" name="hoursLeft" id="hoursLeft" value="{{$project->hoursToDate}}"></label></li>
              <li><label for="dueDate">Date Due:<input type="text" name="dueDate" id="dueDate" value="{{$project->dateDue}}"></label></li>
              <li>
                <label for="status">Status:
                  <select name="status" id="status">
                    <option value="temp">temp</option>
                  </select>
                </label>
              </li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </form>

  <div id="contain" class="w3-container">
    <ul class="w3-navbar w3-black">
      <li><a href="javascript:void(0)" class="tablink w3-red" onclick="openTab(event, 'Comments')">Comments / Tasks</a></li>
      <li><a href="javascript:void(0)" class="tablink" onclick="openTab(event, 'Contacts')">Contacts</a></li>
      <li><a href="javascript:void(0)" class="tablink" onclick="openTab(event, 'Files')">File Attachments</a></li>
    </ul>

    <div id="Comments" class="w3-container w3-border tab" style="display:block">
        <form>
          <div class="pull-left" style="width: 150px; background-color: red;">Comments / Tasks:</div>
          <div class="pull-right" style="width: 650px;">
            <ul style=" height: 400px; background-color: white;">
              <li >List of tasks and comments will go here</li>
            </ul>
            <input type="button" name="delComment" value="Delete Comment">
            <input type="button" name="addComment" value="Add Comment">
            <label for="comment">Comment / Taks Text:<input type="text" id="comment" name="comment"></label>
          </div>
        </form>
    </div>

    <div id="Contacts" class="w3-container w3-border tab" style="display:none">
        <form>
          <div class="pull-left" style="width: 150px; background-color: red;">Related Contacts:</div>
          <div class="pull-right" style="width: 650px;">
            <ul style=" height: 400px; background-color: white;">
              <li >List of tasks and comments will go here</li>
            </ul>
            <input type="button" style="float: right;" value="Email Selected Contact" name="">
            <input type="button" value="View Details for Selected Contact" name="">
            <input type="button" value="Add / Manage Contacts" name="">
            <input type="button" value="Delete Selected Contact" name="">
          </div>
        </form>
    </div>

    <div id="Files" class="w3-container w3-border tab" style="display:none">
        <form>
          <div class="pull-left" style="width: 150px; background-color: red;">Related File Attachments:</div>
          <div class="pull-right" style="width: 650px;">
            <ul style=" height: 400px; background-color: white;">
              <li >List of tasks and comments will go here</li>
            </ul>
            <input type="button" name="" value="Open Selected File">
            <input type="button" name="" value="Remove File Attachment">
            <input type="button" name="" value="Add File Attachment">
            <label for="57">File Description:<input type="text" name="" value=""></label>
            <label for="62">File Name:<input type="text" name="" value=""></label>
            <input type="button" value="File Browse">
          </div>
        </form>
    </div>
  </div>

  <div class="pull-right">
    <input type="button" name="showUnclosed" value="Show Unclosed">
    <input type="button" name="showAll" value="Show All">
  </div>


<script>
  // handles event when the tab buttons are pressed
  function openTab(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("tab");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " w3-red";
  }
 </script>
<script>
  // Handles the event when the delete button is pressed
  var delbtn = document.getElementById('delete');
  delbtn.addEventListener('click', function () {
    if (confirm('Are you sure you want to delete this project?\nIt will be destroyed forever!'))
    {
      document.getElementById('_method').value = 'delete';
      alert("Deleteing Project (refresh the page to stop the deletion)");
    }
  });
 </script>
<script src="../js/app.js"></script>
</body>
</html>
