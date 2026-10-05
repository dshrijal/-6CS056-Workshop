@csrf

@if($errors->any())
    <div>
        <h3>Please fix the following errors:</h3>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $course->name ?? '') }}">
</div>
<br>
<div>
    <label for="description">Description</label>
    <textarea id="description" name="description">{{ old('description', $course->description ?? '') }}</textarea>
</div>
<br>
<div>
    <label for="duration">Duration (weeks)</label>
    <input type="number" id="duration" name="duration" min="1" value="{{ old('duration', $course->duration ?? '') }}">
</div>
<br>
<div>
    <label for="fee">Fee</label>
    <input type="number" id="fee" name="fee" step="0.01" min="0" value="{{ old('fee', $course->fee ?? '') }}">
</div>
<br>
<div>
    <label for="difficulty">Difficulty</label>
    <select id="difficulty" name="difficulty">
        @foreach(['Easy', 'Medium', 'Hard'] as $level)
            <option value="{{ $level }}" @selected(old('difficulty', $course->difficulty ?? '') === $level)>
                {{ $level }}
            </option>
        @endforeach
    </select>
</div>
<br>
<div>
    <label for="is_active">Active</label>
    {{-- Hidden 0 ensures a value is sent when the checkbox is unchecked --}}
    <input type="hidden" name="is_active" value="0">
    <input type="checkbox" id="is_active" name="is_active" value="1"
        @checked(old('is_active', $course->is_active ?? true))>
</div>
<br>
