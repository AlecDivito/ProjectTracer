@extends('projectTracker.layout')


@section('content')

    <ul>
      <li>
        <label for="lastName">Last Name:<input type="text" name="lastName" id="lastName" required></label>
        <label for="firstName">First Name:<input type="text" name="firstName" id="firstName" required></label>
        <label for="middleName">Middle Name:<input type="text" name="middleName" id="middleName" ></label>
      </li>
      <li>
        <label for="company">Company:<input type="text" name="company" id="company" required></label>
      </li>
      <li>
        <label for="address1">Address 1:<input type="text" name="address1" id="address1" required></label>
      </li>
      <li>
        <label for="address2">Address 2:<input type="text" name="address2" id="address2"></label>
      </li>
      <li>
        <label for="city">City:<input type="text" name="city" id="city" required></label>
        <label for="state">State / Region:<input type="text" name="state" id="state" required></label>
        <label for="postalCode">Postal Code:<input type="text" name="postalCode" id="postalCode" required></label>
      </li>
      <li>
        <label for="workPhone">Work Phone:<input type="text" name="workPhone" id="workPhone" ></label>
      </li>
      <li>
        <label for="homePhone">Home Phone:<input type="text" name="homePhone" id="homePhone" ></label>
      </li>
      <li>
        <label for="cellPhone">Cell Phone:<input type="text" name="cellPhone" id="cellPhone" ></label>
      </li>
      <li>
        <label for="email">Email:<input type="email" name="email" id="email" required></label>
      </li>
    </ul>

    <input type="submit" value="Add Current Contact to Project">

@stop
