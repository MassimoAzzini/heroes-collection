<form action="{{ route('admin.heroes.destroy', $hero) }}" method="POST" class="d-inline-block"
    onsubmit="return confirm('Sicuro di voler cancellare?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        <i class="fa-solid fa-trash"></i>
    </button>
</form>
