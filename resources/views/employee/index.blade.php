<style>
    /* Styling untuk header */
    .header-title {
        font-weight: 600;
        font-size: 1.25rem;
        /* setara xl */
        line-height: 1.25;
    }

    /* Container utama */
    .container-wrapper {
        padding-top: 3rem;
        /* 12 * 0.25rem */
        padding-bottom: 3rem;
    }

    .content-box {
        max-width: 80rem;
        /* 7xl */
        margin-left: auto;
        margin-right: auto;
        background-color: white;
        overflow: hidden;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        border-radius: 0.5rem;
        padding: 1.5rem;
    }

    /* Responsif (untuk sm:px-6 lg:px-8) */
    @media (min-width: 640px) {
        .container-wrapper {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
    }

    @media (min-width: 1024px) {
        .container-wrapper {
            padding-left: 2rem;
            padding-right: 2rem;
        }
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="header-title">
            Employee List
        </h2>
    </x-slot>

    <div class="container-wrapper">
        <div class="content-box">
            <div style="margin-bottom: 1.5rem; text-align: right;">
                <a href="{{ route('employee.create') }}"
                    style="background-color: #2563eb; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; text-decoration: none; font-weight: 500;">
                    Add Employee
                </a>
            </div>

            @if (session('success'))
                <div
                    style="background: #d1fae5; color: #065f46; padding: 10px; border-radius: 6px; margin-bottom: 1rem;">
                    {{ session('success') }}
                </div>
            @endif

            <table style="width: 100%; border-collapse: collapse; text-align: left;">
                <thead>
                    <tr style="border-bottom: 2px solid #e5e7eb;">
                        <th style="padding: 1rem;">No.</th>
                        <th style="padding: 1rem;">Name</th>
                        <th style="padding: 1rem;">Code</th>
                        <th style="padding: 1rem;">Department</th>
                        <th style="padding: 1rem;">Position</th>
                        <th style="padding: 1rem;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($employee as $employees)
                        <tr style="border-bottom: 1px solid #f3f4f6;">
                            <td style="padding: 1rem;">{{ $loop->iteration }}</td>
                            <td style="padding: 1rem;">{{ $employees->name }}</td>
                            <td style="padding: 1rem;">{{ $employees->employee_code }}</td>
                            <td style="padding: 1rem;">{{ $employees->department->department_name }}</td>
                            <td style="padding: 1rem;">{{ $employees->position->position_name }}</td>
                            <td style="padding: 1rem;"><a href="{{ route('employee.edit', $employees->id) }}">Edit</a>
                                <form action="{{ route('employee.destroy', $employees->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')"
                                        style="color:red; border:none; background:none; cursor:pointer;">
                                        Delete
                                    </button>
                                </form>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" style="padding: 1rem; text-align: center;">
                                No employees found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div style="margin-top: 1rem;">
                {{ $employee->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
