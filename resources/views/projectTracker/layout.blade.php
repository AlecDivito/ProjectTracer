<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="../css/app.css">

</head>
<body>

<div class="content container">
  <form method="post" >
    <div class="buttons">
      <div class="pull-left">
        <input type="submit" name="back2" value="<|">
        <input type="submit" name="back1" value="<">
        <input type="submit" name="forward1" value=">">
        <input type="submit" name="forward2" value="|>">
      </div>
      <div class="pull-right">
        <input type="submit" name="new" value="Add New">
        <input type="submit" name="save" value="Save Changes">
        <input type="submit" name="delete" value="Delete">
      </div>
      <div class="clearfix"></div>
    </div>
    <p>Record # of #</p>

    @yield('content')

  </form>
</div>

<script src="../js/app.js"></script>
</body>
</html>