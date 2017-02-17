<!DOCTYPE html>
<html>
<head>
  <meta name="csrf-token" content="{!! csrf_token() !!}">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="../../../css/app.css">
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
  <div class="pull-left">
    <a href="{{$values['url']}}{{$values['first']}}"><button class="btn"><|</button></a>
    <a href="{{$values['url']}}{{$values['pervious']}}"><button class="btn"><</button></a>
    <a href="{{$values['url']}}{{$values['next']}}"><button class="btn">></button></a>
    <a href="{{$values['url']}}{{$values['last']}}"><button class="btn">|></button></a>
  </div>

  <div class="pull-right">
    <form action="{{$values['url']}}" method="post">
      {{ csrf_field() }}
      <input type="submit" name="new" value="Add New"><!-- POST(to project/new) -->
    </form>
  </div>

  <form method="post" id="mainForm">
    <div action="{{$values['url']}}{{$contact->contactId}}"  class="pull-right">
      {{ csrf_field() }}
      <input type="hidden" name="_method" id="_method" value="post">
      <input type="submit" id="save" name="save" value="Save Changes"><!-- POST -->
      <input type="submit" name="delete" id="delete" value="Delete"><!-- DELETE -->
    </div>
    <div class="clearfix"></div>
    <p>Record {{$values['currentCount']}} of {{$values['count']}}</p>
    <ul>
      <li>
        <label for="lastName">Last Name:<input type="text" name="lastName" id="lastName" value="{{$contact->lastName or ''}}" required></label>
        <label for="firstName">First Name:<input type="text" name="firstName" id="firstName" value="{{$contact->firstName or ''}}" required></label>
        <label for="middleName">Middle Name:<input type="text" name="middleName" id="middleName" value="{{$contact->middleName or ''}}" ></label>
      </li>
      <li><label for="company">Company:<input type="text" name="company" id="company" value="{{$contact->company or ''}}" required></label></li>
      <li><label for="address1">Address 1:<input type="text" name="address1" id="address1" value="{{$contact->address1 or ''}}" required></label></li>
      <li><label for="address2">Address 2:<input type="text" name="address2" id="address2" value="{{$contact->address2 or ''}}" ></label></li>
      <li>
        <label for="city">City:<input type="text" name="city" id="city" value="{{$contact->city or ''}}" required></label>
        <label for="region">State / Region:<input type="text" name="region" id="region" value="{{$contact->region or ''}}" required></label>
        <label for="postalCode"> Postal Code:<input type="text" name="postalCode" id="postalCode" value="{{$contact->postalCode or ''}}" required></label>
      </li>
      <li><label for="workPhone">Work Phone:<input type="text" name="workPhone" id="workPhone" value="{{$contact->workPhone or ''}}" ></label></li>
      <li><label for="homePhone">Home Phone:<input type="text" name="homePhone" id="homePhone" value="{{$contact->homePhone or ''}}" ></label></li>
      <li><label for="cellPhone">Cell Phone:<input type="text" name="cellPhone" id="cellPhone" value="{{$contact->cellPhone or ''}}" ></label></li>
      <li><label for="email">Email:<input type="email" name="email" id="email" value="{{$contact->email or ''}}" required></label></li>
    </ul>
    @if(isset($project))
      <input type="button" id="add" value="Add Current Contact to Project">
    @else
      <input type="button" id="add" value="Add Current Contact to Project" disabled>
    @endif
  </form>
</div>
<script type="text/javascript">
  function sendAjaxRequest(type, header='application/json;', url, params) {
    http.open(type, url, true);
    http.setRequestHeader('Content-type', header);
    http.onreadystatechange = function () {
      if(http.readyState == 4 && http.status == 200) {
        alert(http.responseText);
      }
    }
    http.send(params);
  }

  var http = new XMLHttpRequest();

  // add
  var add = document.getElementById('add');
  add.addEventListener('click', function () {
    var params = {'_token' :$('meta[name=csrf-token]').attr('content'),
                  '_method':'PATCH' };
    sendAjaxRequest('POST', 'application/json; charset=utf-8',
      '/project/{{$project->projectId}}/contact/{{$contact->contactId}}', JSON.stringify(params));
    add.disabled = true;
  });
</script>
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
<script src="../../../js/app.js"></script>
</body>
</html>
