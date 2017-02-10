<!DOCTYPE html>
<html>
<head>
  <title>Title</title>
  <link rel="stylesheet" href="../css/app.css">

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

      <form action="{{$project->projectId}}" method="post">
          <input type="hidden" name="_method" value="post">
            <div class="pull-right">
              <input type="submit" name="new" value="Add New"><!-- POST(to project/new) -->
              <input type="submit" name="save" value="Save Changes"><!-- POST -->
              <input type="submit" name="delete" value="Delete"><!-- DELETE -->
            </div>
            <div class="clearfix"></div>
          </div>
          <p>Record # of #</p>
          {{ csrf_field() }}
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
              <li><label for="budget">Money Budget:<input type="text" name="budget" id="budget" value="{{$project->moneyBudget}}"></label></li>
              <li><label for="budgetLeft">Money to Date:<input type="text" name="budgetLeft" id="budgetLeft" value="{{$project->moneyToDate}}"></label></li>
              <li><label for="budgetHours">Hours Budget:<input type="text" name="budgetHours" id="budgetHours" value="{{$project->hoursBudget}}"></label></li>
              <li><label for="hoursLeft">Hours to Date:<input type="text" name="hoursLeft" id="hoursLeft" value="{{$project->hoursToDate}}"></label></li>
              <li><label for="dueDate">Date Due:<input type="text" name="dueDate" id="dueDate" value="{{$project->dateDue}}"></label></li>
              <li>
                <label for="status">Status:
                  <select name="status" id="status">
                    <option value="temp">temp</option>
                  </select>
                </label>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </form>

    <div class="comments">
      <div id="tabs">

        <header>Comments/Tasks</header>
        <form>
          {{ csrf_field() }}
          <div id="tasks">
            Comments / Tasks
            <ul>
              <!-- List of tasks and comments will go here -->
            </ul>
            <input type="button" name="delComment" value="Delete Comment">
            <input type="button" name="addComment" value="Add Comment">
            <label for="comment">Comment / Taks Text:<input type="text" id="comment" name="comment"></label>
          </div>
        </form>


        <header>Contacts</header>
        <form>
          {{ csrf_field() }}
          <div id="contacts">
            Related Contacts:
            <ul>
              <!-- List of Related Contacts will go here -->
            </ul>
            <input type="button" value="Email Selected Contact" name="">
            <input type="button" value="View Details for Selected Contact" name="">
            <input type="button" value="Add / Manage Contacts" name="">
            <input type="button" value="Delete Selected Contact" name="">
          </div>
        </form>

        <header>File Attachments</header>
        <form>
          {{ csrf_field() }}
          <div id="files">
            Related File Attachments:
            <ul>
              <!-- List of Attached Files will go here -->
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

<script src="../js/app.js"></script>
</body>
</html>
