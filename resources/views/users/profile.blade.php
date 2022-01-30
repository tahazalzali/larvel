@extends('layouts.app')
@section('content')




<form>
    <!-- Name input -->
    <div class="form-outline mb-4">
      <input type="text" id="name" class="form-control" />
      <label class="form-label" for="name">Name</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="text" id="bio" class="form-control" />
      <label class="form-label" for="bio">Bio</label>
    </div>

    {{-- Gender --}}
    <div class="form-group">
        <label for="gender">Gender</label>
        <select multiple class="form-control" id="gender">
          <option value="male">male</option>
          <option value="female">female</option>

        </select>
      </div>

    <!-- Message input -->
    <div class="form-outline mb-4">
      <textarea class="form-control" id="url" rows="4"></textarea>
      <label class="form-label" for="url">url</label>
    </div>

    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
      <input
        class="form-check-input me-2"
        type="checkbox"
        value=""
        id="form4Example4"
        checked
      />
      <label class="form-check-label" for="form4Example4">
        Send me a copy of this message
      </label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
  </form>




@endsection
