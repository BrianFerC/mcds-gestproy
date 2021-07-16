@forelse ($prov as $provider)
    <tr>
        <td>{{ $provider->name_provider }}</td>
        <td>{{ $provider->name_contact }}</td>
        <td><img src="{{ asset($provider->image_provider) }}" width="36px" class="img-thumbnail"></td>
        <td>
            <a href="{{ url('providers/'.$provider->id) }}" class="btn btn-sm btn-larapp">
                <i class="fas fa-search"></i>
            </a>
            <a href="{{ url('providers/'.$provider->id.'/edit') }}" class="btn btn-sm btn-larapp">
                <i class="fas fa-pen"></i>
            </a>
            <form action="{{ url('providers/'.$provider->id) }}" class="d-inline" method="POST">
                @csrf
                @method('delete')
                <button type="button" class="btn btn-sm btn-danger btn-delete">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
        </td>
    </tr>
@empty
<tr>
    <td colspan="2" class="text-center">
        No providers found by Name and Name contact!
    </td>
</tr>
@endforelse
