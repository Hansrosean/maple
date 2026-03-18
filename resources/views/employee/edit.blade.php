<style>
    .form-input {
        width: 100%;
        padding: 0.5rem;
        margin-top: 0.25rem;
        border: 1px solid #d1d5db;
        border-radius: 0.375rem;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="header-title">Edit Employee</h2>
    </x-slot>

    <div class="container-wrapper">
        <div class="content-box">
            @if ($errors->any())
                <div style="color:red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                    <div>
                        <label>Employee Code</label>
                        <input type="text" name="employee_code" class="form-input"
                            value="{{ $employee->employee_code }}" required>
                    </div>
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" class="form-input" value="{{ $employee->name }}" required>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="form-input" value="{{ $employee->email }}" required>
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-input" value="{{ $employee->phone }}">
                    </div>

                    <div>
                        <label>Birth Date</label>
                        <input type="date" name="birth_date" class="form-input"
                            value="{{ $employee->birth_date?->format('Y-m-d') }}">
                    </div>
                    <div>
                        <label>Hire Date</label>
                        <input type="date" name="hire_date" class="form-input"
                            value="{{ $employee->hire_date?->format('Y-m-d') }}">
                    </div>
                    <div>
                        <label>Gender</label>
                        <select name="gender" class="form-input">
                            <option value="Male" @selected($employee->gender == 'Male')>Male</option>
                            <option value="Female" @selected($employee->gender == 'Female')>Female</option>
                        </select>
                    </div>
                    <div>
                        <label>Department</label>
                        <select name="department_id" class="form-input">
                            @foreach ($departments as $dept)
                                <option value="{{ $dept->id }}" @selected($dept->id == $employee->department_id)>
                                    {{ $dept->department_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label>Position</label>
                        <select name="position_id" class="form-input">
                            @foreach ($positions as $pos)
                                <option value="{{ $pos->id }}" @selected($pos->id == $employee->position_id)>
                                    {{ $pos->position_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label>Employment Type</label>
                        <select name="employment_type" class="form-input">
                            <option value="Full-time" @selected($employee->employment_type == 'Full-time')>Full-time</option>
                            <option value="Contract" @selected($employee->employment_type == 'Contract')>Contract</option>
                            <option value="Intern" @selected($employee->employment_type == 'Intern')>Intern</option>
                        </select>
                    </div>
                </div>

                <div style="margin-top: 2rem;">
                    <label>Address</label>
                    <textarea name="address" class="form-input" rows="3">{{ $employee->address }}</textarea>
                </div>

                <button type="submit"
                    style="margin-top: 1.5rem; background: #2563eb; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem;">
                    Update Employee
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
