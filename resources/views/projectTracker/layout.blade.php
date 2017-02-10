<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
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
    <input type="hidden" name="_method" value="">
    <div class="buttons">
      <div class="pull-left">
        <input type="submit" name="moveFirst" value="<|"><!-- POST -->
        <input type="submit" name="movePrevious" value="<"><!-- POST -->
        <input type="submit" name="moveNext" value=">"><!-- POST -->
        <input type="submit" name="moveLast" value="|>"><!-- POST -->
      </div>
      <div class="pull-right">
        <input type="submit" name="new" value="Add New"><!-- PUT -->
        <input type="submit" name="save" value="Save Changes"><!-- PATCH -->
        <input type="submit" name="delete" value="Delete"><!-- DELETE -->
      </div>
      <div class="clearfix"></div>
    </div>
  </form>
    <p>Record # of #</p>

    @yield('content')

</div>

<script src="../js/app.js"></script>
</body>
</html>