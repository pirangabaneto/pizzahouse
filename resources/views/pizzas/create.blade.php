@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
  <h1>Create a New Pizza</h1>
  <form action="/pizzas" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" id="name" name="name">

    <!--Start pizzas type-->
    <label for="type">Choose pizza type</label>
    <select name="type" id"type">
      <option value="margarita">Margarita</option>
      <option value="hawaiian">Hawaiian</option>
      <option value="veg supreme">Veg Supreme</option>
      <option value="volcano">Volcano</option>
    </select>
    <!--End pizzas type-->

    <!--Start pizzas base-->
    <label for="base">Choose pizza base</label>
    <select name="base" id"base">
      <option value="cheesy crust">Cheesy Crust</option>
      <option value="garlic crust">Garlic Crust</option>
      <option value="thin & cristy">Thin & Crispy</option>
      <option value="thick">Thick</option>
    </select>
    <!--End pizzas base-->

    <input type="submit" value="Order Pizza">
  </form>
</div>
@endsection
