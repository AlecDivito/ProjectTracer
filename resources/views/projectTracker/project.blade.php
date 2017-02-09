@extends('projectTracker.layout')

@section('content')
    <div class="inputs">
      <ul class="pull-left">
        <li><label for="projId">Project ID:<input type="text" name="projId" id="projId"></label></li>
        <li><label for="projTitle">Project Title:<input type="text" name="projTitle" id="projTitle"></label></li>
        <li><label for="">Project Description:<textarea></textarea></label></li>
        <li>
          <label for="priority">Priority
            <select name="priority" id="priority">
              <option value="temp">temp</option>
            </select>
          </label>
        </li>
      </ul>
      <ul class="pull-right">
        <li><label for="referenceNum">Reference/Matter #:<input type="text" name="referenceNum" id="referenceNum"></label></li>
        <li><label for="budget">Money Budget:<input type="text" name="budget" id="budget"></label></li>
        <li><label for="budgetLeft">Money to Date:<input type="text" name="budgetLeft" id="budgetLeft"></label></li>
        <li><label for="budgetHours">Hours Budget:<input type="text" name="budgetHours" id="budgetHours"></label></li>
        <li><label for="hoursLeft">Hours to Date:<input type="text" name="hoursLeft" id="hoursLeft"></label></li>
        <li><label for="dueDate">Date Due:<input type="text" name="dueDate" id="dueDate"></label></li>
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

    <div class="comments">
      <div id="tabs">

        <header>Comments/Tasks</header>
        <div id="tasks">
          Comments / Tasks
          <ul>
            <!-- List of tasks and comments will go here -->
          </ul>
          <input type="button" name="delComment" value="Delete Comment">
          <input type="button" name="addComment" value="Add Comment">
          <label for="comment">Comment / Taks Text:<input type="text" id="comment" name="comment"></label>
        </div>

        <header>Contacts</header>
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

        <header>File Attachments</header>
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
      </div>
    </div>

  <div class="pull-right">
    <input type="button" name="showUnclosed" value="Show Unclosed">
    <input type="button" name="showAll" value="Show All">
  </div>

@stop
