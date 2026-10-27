<form action="{{ url('/students/' . $student->id) }}"
      method="POST"
      onsubmit="return confirm('Are you sure you want to delete this student?');">

    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>