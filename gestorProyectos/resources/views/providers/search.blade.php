@forelse ($projects as $project)
<tr>
    <td>{{ $project->code }}</td>
    <td>{{ $project->name }}</td>
    <td>{{ $project->area }}</td>
    <td>
        <a href="{{ url('projects/'.$project->id) }}" class="btn btn-sm btn-larapp">
            <i class="fas fa-search"></i>
        </a>
        <a href="{{ url('projects/'.$project->id.'/edit') }}" class="btn btn-sm btn-larapp">
            <i class="fas fa-pen"></i>
        </a>
        <form action="{{ url('projects/'.$project->id) }}" class="d-inline" method="POST">
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
    <td colspan="4" class="text-center">
        No projects found by Name and Code! 
    </td>
</tr>
@endforelse