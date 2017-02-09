@extends('projectTracker.layout')

@section('content')
    <div class="inputs">
      <ul class="pull-left">
        <li><label for="projId">Project ID:<input type="text" name="projId" id="projId"></label></li>
        <li><label for="projTitle">Project Title:<input type="text" name="projTitle" id="projTitle"></label></li>
        <li><label for="">Project Description:<textarea></textarea></label></li>
        <li><label for="priority">Priority<input type="text" name="priority" id="priority"></label></li>
      </ul>
      <ul class="pull-right">
        <li><label for="referenceNum">Reference/Matter #:<input type="text" name="referenceNum" id="referenceNum"></label></li>
        <li><label for="budget">Money Budget:<input type="text" name="budget" id="budget"></label></li>
        <li><label for="budgetLeft">Money to Date:<input type="text" name="budgetLeft" id="budgetLeft"></label></li>
        <li><label for="budgetHours">Hours Budget:<input type="text" name="budgetHours" id="budgetHours"></label></li>
        <li><label for="hoursLeft">Hours to Date:<input type="text" name="hoursLeft" id="hoursLeft"></label></li>
        <li><label for="dueDate">Date Due:<input type="text" name="dueDate" id="dueDate"></label></li>
        <li><label for="status">Status:<input type="text" name="status" id="status"></label></li>
      </ul>
      <div class="clearfix"></div>
    </div>

    <div class="comments">
      <div id="tabs">

        <header>Comments/Tasks</header>
        <div id="tasks">
          <label for="commentList">Comments / Tasks<textarea name="commentList" id="commentList" cols="30" rows="10"></textarea></label>
          <input type="button" name="delComment" value="Delete Comment">
          <input type="button" name="addComment" value="Add Comment">
          <label for="comment">Comment / Taks Text:<input type="text" id="comment" name="comment"></label>
        </div>

        <header>Contacts</header>
        <div id="contacts">
          <label for="list">Related Contacts:<textarea name="list" id="list" cols="30" rows="10"></textarea></label>
          <input type="button" value="Email Selected Contact" name="">
          <input type="button" value="View Details for Selected Contact" name="">
          <input type="button" value="Add / Manage Contacts" name="">
          <input type="button" value="Delete Selected Contact" name="">
        </div>

        <header>File Attachments</header>
        <div id="files">
          <label for="list55">Related File Attachments:<textarea name="list55" id="list55" cols="30" rows="10"></textarea></label>
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
    <input type="button" value="Show Unclosed">
    <input type="button" value="Show All">
  </div>

@stop
