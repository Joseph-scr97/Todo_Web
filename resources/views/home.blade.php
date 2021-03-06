@component('layout.app')
@slot('content')
<div class="row">
    <div class="col-md-12">
        <a href=" {{ route('create') }} " class="btn btn-primary">
            Create New Todo
        </a>
    </div>
</div>
<div class="row my-5">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($list_todo as $todo)
                <tr>
                    <td> {{ $loop -> iteration }}</td>
                    <td> {{ $todo -> title }}</td>
                    <td> {{ $todo -> description }}</td>
                    <td>
                        {{-- Option 1 --}}
                        @php
                            if( $todo->status == 0 ){
                                $badge = 'badge-info';
                                $status = 'In Progess';
                            }else {
                                $badge = 'badge-success';
                                $status = 'Completed';
                            }                             
                        @endphp
                        <span class="badge {{ $badge }}">
                            {{ $status }}
                        </span>
                        {{-- Option 2
                             <span class="badge {{ $todo -> status == 0 ? 'badge-info' : 'badge-success' }}">
                            {{ $todo -> status == 0 ? 'In Progress' : 'Completed' }}
                        </span> --}}
                    </td>
                    <td> {{ date('d M Y', strtotime( $todo -> created_at )) }}</td>
                    <td>
                    <a href=" {{ route('edit', $todo ) }}" class="btn btn-sm btn-warning"> Edit </a>
                    <a href=" {{ route('delete', $todo) }}" class="btn btn-sm btn-danger"> Delete </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6"> No todo yet </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endslot
@endcomponent