@extends('company.master')

@section('title', 'Company Dashboard | ' .env('APP_NAME'))

@section('css')

<style>
    table span {
        cursor: pointer;
    }
</style>

@endsection


@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        All Projects
        <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addProject">Add new project</a>
    </div>
    <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-{{ session('type') }}">
                {{ session('msg') }}
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Duration</th>
                <th>Status</th>
                <th>Skills</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
            @forelse ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td><img width="80" src="{{ asset('images/'.$project->image) }}" alt=""></td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->price }}</td>
                <td>{{ $project->duration }}</td>
                <td>{!! $project->status ? '<span onclick="editStatus(event, '.$project->id.')" class="badge badge-success">Open</span>' : '<span onclick="editStatus(event, '.$project->id.')"  class="badge badge-danger">Close</span>' !!}</td>
                <td>
                    @foreach ($project->skills as $skill)
                        <small class="badge badge-info">{{ $skill->name }}</small>
                    @endforeach
                </td>
                <td>{{ $project->category->name }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('company.projects.edit', $project) }}"><i class="fas fa-edit"></i></a>
                    <form class="d-inline" action="{{ route('company.projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">No Data Found</td>
                </tr>
            @endforelse
        </table>
    </div>
</div>
@endsection

@section('js')

{{-- Modal --}}
<div class="modal fade" id="addProject" tabindex="-1" aria-labelledby="addProjectLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProjectLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    function editStatus(e, id) {
        // .console.log(id);
        //axios.get().then()
        $.ajax({
            type: 'get',
            url: '{{ route("company.projects.edit_status") }}/'+id,
            success: (res) => {
                if(res) {
                    e.target.classList.remove('badge-danger')
                    e.target.classList.add('badge-success')
                    e.target.innerHTML = 'Open'
                }else {
                    e.target.classList.remove('badge-success')
                    e.target.classList.add('badge-danger')
                    e.target.innerHTML = 'Close'
                }

            }
        })
    }
</script>

@endsection





