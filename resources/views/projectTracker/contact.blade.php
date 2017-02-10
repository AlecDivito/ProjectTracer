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
  <div class="pull-left">
    <form method="post" action="idkyet">
      {{ csrf_field() }}
      <input type="submit" name="moveFirst" value="<|"><!-- POST -->
      <input type="submit" name="movePrevious" value="<"><!-- POST -->
      <input type="submit" name="moveNext" value=">"><!-- POST -->
      <input type="submit" name="moveLast" value="|>"><!-- POST -->
    </form>
  </div>

  <div class="pull-right">
    <form action="new" method="post">
      {{ csrf_field() }}
      <input type="submit" name="new" value="Add New"><!-- POST(to project/new) -->
    </form>
  </div>

  <form action="{{$contact->contactId}}" method="post">
    <div class="pull-right">
      {{ csrf_field() }}
      <input type="hidden" name="_method" id="_method" value="post">
      <input type="submit" name="save" value="Save Changes"><!-- POST -->
      <input type="submit" name="delete" id="delete" value="Delete"><!-- DELETE -->
    </div>
    <div class="clearfix"></div>
    <p>Record # of #</p>
    <ul>
      <li>
        <label for="lastName">
          Last Name:<input type="text" name="lastName" id="lastName" value="{{$contact->lastName}}" required>
        </label>
        <label for="firstName">
          First Name:<input type="text" name="firstName" id="firstName" value="{{$contact->firstName}}" required>
        </label>
        <label for="middleName">
          Middle Name:<input type="text" name="middleName" id="middleName" value="{{$contact->middleName}}" >
        </label>
      </li>
      <li>
        <label for="company">
          Company:<input type="text" name="company" id="company" value="{{$contact->company}}" required>
        </label>
      </li>
      <li>
        <label for="address1">
          Address 1:<input type="text" name="address1" id="address1" value="{{$contact->address1}}" required>
        </label>
      </li>
      <li>
        <label for="address2">
          Address 2:<input type="text" name="address2" id="address2" value="{{$contact->address2}}" >
        </label>
      </li>
      <li>
        <label for="city">
          City:<input type="text" name="city" id="city" value="{{$contact->city}}" required>
        </label>
        <label for="region">
          State / Region:<input type="text" name="region" id="region" value="{{$contact->region}}" required>
        </label>
        <label for="postalCode">
          Postal Code:<input type="text" name="postalCode" id="postalCode" value="{{$contact->postalCode}}" required>
        </label>
      </li>
      <li>
        <label for="workPhone">
          Work Phone:<input type="text" name="workPhone" id="workPhone" value="{{$contact->workPhone}}" >
        </label>
      </li>
      <li>
        <label for="homePhone">
          Home Phone:<input type="text" name="homePhone" id="homePhone" value="{{$contact->homePhone}}" >
        </label>
      </li>
      <li>
        <label for="cellPhone">
          Cell Phone:<input type="text" name="cellPhone" id="cellPhone" value="{{$contact->cellPhone}}" >
        </label>
      </li>
      <li>
        <label for="email">
          Email:<input type="email" name="email" id="email" value="{{$contact->email}}" required>
        </label>
      </li>
    </ul>
    <input type="submit" value="Add Current Contact to Project" disabled>
  </form>
</div>

<script>
  // Handles the event when the delete button is pressed
  var delbtn = document.getElementById('delete');
  delbtn.addEventListener('click', function () {
    if (confirm('Are you sure you want to delete this contact?\nIt will be destroyed forever!'))
    {
      document.getElementById('_method').value = 'delete';
      alert("Deleteing Contact (refresh the page to stop the deletion)");
    }
  });
 </script>
<script src="../js/app.js"></script>
</body>
</html>
