@extends('users.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Audit Logs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>User Type</th>
            <th>User Id </th>
            <th>Event</th>
            <th>Auditable Type</th>
            <th>Auditable Id</th>
            <th>Old Values</th>
            <th>New Values</th>
            <th>URL</th>
            <th>IP Address</th>
            <th>User Agent<th>
            <th>Tags</th>
            <th>Created At</th>
            <th>Updated At</th>

        </tr>
        @foreach ($audits as $audit)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $audit->user_type }}</td>
            <td>{{ $audit->user_id }}</td>
            <td>{{ $audit->event }}</td>
            <td>{{ $audit->auditable_type}}</td>
            <td>{{ $audit->auditable_id }}</td>
            <td>{{ $audit->old_values}}</td>
            <td>{{ $audit->new_values}}</td>
            <td>{{ $audit->url}}</td>
            <td>{{ $audit->ip_address}}</td>
            <td>{{ $audit->user_agent}}</td>
            <td>{{ $audit->tags}}</td>
            <td>{{ $audit->created_at}}</td>
            <td>{{ $audit->updated_at}}</td>
        </tr>
        @endforeach
    </table>
  
    {!! $audits->links() !!}
      
@endsection