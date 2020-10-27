<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <input type="text" wire:model="search" class="form-control my-3" placeholder="Search student name">
    @foreach ($students as $student)
        <livewire:student-single :student="$student" :key="$student->id"/>
    @endforeach

    {{ $students->links() }}
</div>
