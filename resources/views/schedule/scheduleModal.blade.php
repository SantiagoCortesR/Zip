<form data-parsley-validate novalidate action="{{route('schedule.store')}}" method="POST">
    <div class="modal fade "  id="createSchedule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg  ">
            <div class="modal-content border-primary p-3 rounded shadow-primary">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Create Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row px-2 py-1">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <label for="">Event Type</label>
                                    <select name="type" id="type" class="js-custom-select" data-hs-select2-options required wire:model="type">
                                        <option value="" disabled selected>Select</option>
                                        <option value="Work Meeting">Work Meeting</option>
                                        <option value="Class">Class</option>
                                    </select>
                                    @error('type')
                                        <span class="text-danger font-size-6">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-3">
                                    <label for="">Day</label>
                                    <select name="day_id" id="day_id" class="js-custom-select" data-hs-select2-options required wire:model="day_id">
                                        <option value="" disabled selected>Select</option>
                                        <option value="1">Monday</option>
                                        <option value="2">Tuesday</option>
                                        <option value="3">Wednesday</option>
                                        <option value="4">Thursday</option>
                                        <option value="5">friday</option>
                                        <option value="6">Saturday</option>
                                    </select>
                                    @error('day_id')
                                        <span class="text-danger font-size-6">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-3">
                                    <label for="">Room</label>
                                    <select name="room_id" id="room_id" class="js-custom-select" data-hs-select2-options required wire:model="room_id">
                                        <option value="" disabled selected>Select</option>
                                        <option value="1">Alicia Rd T1</option>
                                        <option value="2">Alicia Rd T2</option>
                                        <option value="3">Alicia Rd T3</option>
                                        <option value="4">Magnet Court M1</option>
                                        <option value="5">Magnet Court M2</option>
                                        <option value="6">Magnet Court M3</option>
                                        <option value="7">Magnet Court M4</option>
                                        <option value="8">Magnet Court M5</option>
                                    </select>
                                    @error('room_id')
                                        <span class="text-danger font-size-6">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-3">
                                    <label for="">Time</label>
                                    <select name="timezone_id" id="timezone_id" class="js-custom-select" data-hs-select2-options required wire:model="timezone_id">
                                        <option value="" disabled selected>Select</option>
                                        <option value="1">6:30AM - 7:30AM</option>
                                        <option value="2">7:31AM - 8:30AM</option>
                                        <option value="3">8:31AM - 9:30AM</option>
                                        <option value="4">9:31AM - 10:30AM</option>
                                        <option value="5">10:31AM - 11:30AM</option>
                                        <option value="6">11:31AM - 12:30PM</option>
                                        <option value="7">12:31PM - 1:30PM</option>
                                        <option value="8">1:31PM - 2:30PM</option>
                                        <option value="9">2:31PM - 3:30PM</option>
                                        <option value="10">3:31PM - 4:30PM</option>
                                        <option value="11">4:31PM - 5:30PM</option>
                                        <option value="12">5:31PM - 6:30PM</option>
                                        <option value="13">6:31PM - 7:30PM</option>
                                      
                                    </select>
                                    @error('timezone_id')
                                        <span class="text-danger font-size-6">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label for="">Tutor</label>
                                    <select name="tutor"  class="js-custom-select" data-hs-select2-options required wire:model="tutor">
                                        <option value="" disabled selected>Select ...</option>
                                        @foreach ($tutors as $tutor)
                                            <option value="{{$tutor->id}}">{{$tutor->name.' '.$tutor->last_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('tutor')
                                        <span class="text-danger font-size-6">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="">Student</label>
                                    <select name="student"  class="js-custom-select" data-hs-select2-options required wire:model="student">
                                        <option value="" disabled selected>Select ...</option>
                                        @foreach ($students as $student)
                                            <option value="{{$student->user->name.' '.$student->user->last_name}}">{{$student->user->name.' '.$student->user->last_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('student')
                                        <span class="text-danger font-size-6">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>