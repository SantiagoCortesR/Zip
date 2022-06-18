<div class="col-12">
    <div class="col-12 border bg-primary text-light rounded-top">
        <select class="" name="day" id="day" wire:model="day" style="
                border:none;
                background:#377dff;
                color:#fff;
                width:100%;
                padding:15px;
                text-align-last: center;
                cursor:pointer;
                font-size:25px;
                border-radius: 1px;
                appearance: none;
                ">
            <option value="1">Monday</option>
            <option value="2">Tuesday</option>
            <option value="3">Wednesday</option>
            <option value="4">Thursday</option>
            <option value="5">Friday</option>
            <option value="6">Saturday</option>
        </select>

    </div>
    <div class="table-responsive bg-light">
        <table class="table align-middle table-striped table-bordered table-sm ">
            <thead>
                <tr>
                    <th scope="col" style="width:25px;" class="bg-secondary text-light text-center">H</th>
                    <th scope="col" class="bg-primary text-light text-center">Alicia Rd T1</th>
                    <th scope="col" class="bg-info text-light text-center">Alicia Rd T2</th>
                    <th scope="col" class="bg-primary text-light text-center">Alicia Rd T3</th>
                    <th scope="col" class="bg-info text-light text-center">Magnet Ct M1</th>
                    <th scope="col" class="bg-primary text-light text-center">Magnet Ct M2</th>
                    <th scope="col" class="bg-info text-light text-center">Magnet Ct M3</th>
                    <th scope="col" class="bg-primary text-light text-center">Magnet Ct M4</th>
                    <th scope="col" class="bg-info text-light text-center">Magnet Ct M5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="bg-secondary text-light">6:30AM - 7:30AM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 1 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block" data-toggle="modal" data-target="#deleteModal{{$event->id}}">Delete</a>
                                        <div class="modal fade" id="deleteModal{{ $event->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <form method="POST" action="{{route('schedule.destroy',['schedule' => $event->id ])}}">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                                    <div class="modal-content red-danger border-red-danger">
                                                        <div class="modal-body border-danger text-white text-center">
                                                            <i class='bx bxs-error font-size-100 text-white'></i><br>
                                                            <span class="h2 text-white mb-2">Are you sure?</span><br>
                                                            you want to delete {{ $event->tutor }} <br>this process cannot be reversed<br>
                                                            <input type="text" value="{{ $event->id }}" name="id" style="display:none;" >
                                                            <button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-danger mt-3">Yes, Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 1 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 1 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 1 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 1 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 1 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 1 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 1 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">7:31AM - 8:30AM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 2 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 2 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 2 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 2 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 2 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 2 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 2 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 2 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">8:31AM - 9:30AM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 3 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 3 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 3 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 3 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 3 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 3 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 3 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 3 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">9:31AM - 10:30AM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 4 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 4 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 4 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 4 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 4 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 4 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 4 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 4 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>

                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">10:31AM - 11:30AM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 5 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 5 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 5 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 5 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 5 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 5 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 5 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 5 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>

                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">11:31AM - 12:30AM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 6 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 6 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 6 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 6 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 6 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 6 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 6 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 6 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>

                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">12:31AM - 1:30PM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 7 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 7 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 7 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 7 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 7 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 7 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 7 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 7 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>

                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">1:31PM - 2:30PM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 8 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 8 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 8 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 8 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 8 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 8 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 8 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 8 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>

                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">2:31PM - 3:30PM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 9 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 9 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 9 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 9 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 9 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 9 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 9 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 9 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>

                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">3:31PM - 4:30PM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 10 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 10 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 10 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 10 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 10 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 10 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 10 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 10 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>

                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">4:31PM - 5:30PM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 11 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 11 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 11 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 11 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 11 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 11 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 11 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 11 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>

                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">5:31PM - 6:30PM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 12 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 12 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 12 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 12 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 12 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 12 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 12 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 12 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>

                </tr>
                <tr>
                    <th scope="row" class="bg-secondary text-light">6:31PM - 7:30PM</th>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 13 and $event->room_id == 1)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 13 and $event->room_id == 2)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 13 and $event->room_id == 3)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 13 and $event->room_id == 4)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 13 and $event->room_id == 5)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 13 and $event->room_id == 6)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 13 and $event->room_id == 7)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($events as $event)
                            @if ($event->timezone_id == 13 and $event->room_id == 8)
                                <div class="card text-center mb-0 border rounded">
                                    <div class="card-header text-light rounded"
                                        style="background-color: rgb({{ $event->color }})">
                                        {{ $event->type }}
                                    </div>
                                    <div class="card-body rounded"
                                        style="background-color:rgba({{ $event->color }},.2)">
                                        <h5 class="card-title">{{ $event->tutor }}</h5>
                                        <p class="card-text">{{ $event->student }}</p>

                                    </div>
                                    <div class="card-footer text-muted rounded">
                                        <a href="#" class="btn btn-sm btn-danger btn-block">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</div>
