@extends('projectTracker.layout')


@section('content')

    <ul>
      <li>
        <label for="">Last Name:<input type="text" name="" id="" required></label>
        <label for="">First Name:<input type="text" name="" id="" required></label>
        <label for="">Middle Name:<input type="text" name="" id="" ></label>
      </li>
      <li>
        <label for="">Company:<input type="text" name="" id="" required></label>
      </li>
      <li>
        <label for="">Address 1:<input type="text" name="" id="" required></label>
      </li>
      <li>
        <label for="">Address 2:<input type="text" name="" id=""></label>
      </li>
      <li>
        <label for="">City:<input type="text" name="" id="" required></label>
        <label for="">State / Region:<input type="text" name="" id="" required></label>
        <label for="">Postal Code:<input type="text" name="" id="" required></label>
      </li>
      <li>
        <label for="">Work Phone:<input type="text" name="" id="" ></label>
      </li>
      <li>
        <label for="">Home Phone:<input type="text" name="" id="" ></label>
      </li>
      <li>
        <label for="">Cell Phone:<input type="text" name="" id="" ></label>
      </li>
      <li>
        <label for="">Email:<input type="text" name="" id="" required></label>
      </li>
    </ul>

    <input type="submit" value="Add Current Contact to Project">

@stop
