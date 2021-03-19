<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <x-page-title>Employees</x-page-title>
            <a href="{{ route('employees.create') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Create
                New Employee</a>
        </div>
    </x-slot>

    <x-page-content>
        @if (session('success'))
            <x-card class="mb-8">
                <x-card-item class="text-green-800"
                    class-bg-color="bg-green-50">
                    {{ session('success') }}</x-card-item>
            </x-card>
        @endif

        @if ($employees->count())
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div
                        class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div
                            class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Employee
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Gender
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Date of Birth
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Contact Number
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Company
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Job Title
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Salary per Month
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-gray-200">
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <a href="{{ route('employees.show', ['employee' => $employee->id]) }}"
                                                    class="text-indigo-600 hover:text-indigo-900">{{ $employee->full_name }}</a>
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $employee->gender_name }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ date('m/d/Y', strtotime($employee->birth_date)) }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $employee->contact_number }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $employee->company }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $employee->job_title }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ number_format($employee->salary_per_month, 2) }}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div
                                class="bg-white py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 border-t border-gray-200">
                                {{ $employees->links() }}</div>

                        </div>
                    </div>
                </div>
            </div>
        @else
            <x-card>
                <x-card-item>No available employees.</x-card-item>
            </x-card>
        @endif
    </x-page-content>
</x-app-layout>
