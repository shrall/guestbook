@if(count($event->guests) > 0)
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Guest Name</th>
                            <th>Guest Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($event->guests as $guest)
                            <tr class="text-center">
                                <td>{{$guest->id}}</td>
                                <td>{{$guest->name}}</a></td>
                                <td>{{$guest->email}}</td>
                                <td>@if($guest->pivot->is_approved == 0) <p class="text-warning">Pending</p>
                                    @elseif($guest->pivot->is_approved == 1) <p class="text-success">Approved</p>
                                    @else <p class="text-danger">Rejected</p> @endif </td>
                                <td width="150px">
                                    <div class="row no-gutters">
                                        @if($guest->pivot->is_approved == 0)
                                            <div class="col-md-6">
                                                {{-- <form action="#" --}}
                                                <form action="{{route('creator.guests.approve', $guest->id)}}"
                                                      method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="event_id" type="hidden" value="{{$event->id}}">
                                                    <button class="btn btn-success btn-circle" title="Approve" type="submit"><i class="fas fa-check"></i></button>
                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                                {{-- <form action="#" --}}
                                                <form action="{{route('creator.guests.decline', $guest->id)}}"
                                                      method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="event_id" type="hidden" value="{{$event->id}}">
                                                    <button class="btn btn-danger btn-circle" title="Reject" type="submit"><i class="fas fa-times"></i></button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <h1 class="h4 mb-0 font-weight-bold text-primary">No Records</h1>
                @endif
