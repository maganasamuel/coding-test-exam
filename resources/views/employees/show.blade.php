<x-app-layout>
    <x-slot name="header">
        <x-page-title>Employee Details</x-page-title>
    </x-slot>

    <x-page-content>
        <div class="relative">
            <form method="post"
                action="{{ route('employees.update', ['employee' => $employee->id]) }}">
                @csrf
                @method('PUT')
                <x-card>
                    <x-card-item>
                        <div class="space-y-4">
                            <div>
                                <x-label for="first_name" value="First Name" />
                                <x-input type="text" id="first_name"
                                    name="first_name"
                                    :value="old('first_name') ?? $employee->first_name"
                                    class="block w-full mt-1" />
                                <x-input-error for="first_name" />
                            </div>
                            <div>
                                <x-label for="middle_name"
                                    value="Middle Name" />
                                <x-input type="text" id="middle_name"
                                    name="middle_name"
                                    :value="old('middle_name') ?? $employee->middle_name"
                                    class="block w-full mt-1" />
                                <x-input-error for="middle_name" />
                            </div>
                            <div>
                                <x-label for="last_name" value="Last Name" />
                                <x-input type="text" id="last_name"
                                    name="last_name"
                                    :value="old('last_name') ?? $employee->last_name"
                                    class="block w-full mt-1" />
                                <x-input-error for="last_name" />
                            </div>
                            <div>
                                <x-label for="gender" value="Gender" />
                                <div class="space-x-6 mt-1">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio"
                                            name="gender" value="0"
                                            {{ (old('gender') ?? $employee->gender) == 0 ? 'checked' : '' }}>
                                        <span class="ml-2">Male</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio"
                                            name="gender" value="1"
                                            {{ (old('gender') ?? $employee->gender) == 1 ? 'checked' : '' }}>
                                        <span class="ml-2">Female</span>
                                    </label>
                                </div>
                                <x-input-error for="gender" />
                            </div>
                            <div>
                                <x-label for="birth_date"
                                    value="Date of Birth" />
                                <x-input type="date" id="birth_date"
                                    name="birth_date"
                                    :value="old('birth_date') ?? $employee->birth_date"
                                    class="block w-full mt-1" />
                                <x-input-error for="birth_date" />
                            </div>
                            <div>
                                <x-label for="address" value="Address" />
                                <x-input type="text" id="address" name="address"
                                    :value="old('address') ?? $employee->address"
                                    class="block w-full mt-1" />
                                <x-input-error for="address" />
                            </div>
                            <div>
                                <x-label for="contact_number"
                                    value="Contact Number" />
                                <x-input type="text" id="contact_number"
                                    name="contact_number"
                                    :value="old('contact_number') ?? $employee->contact_number"
                                    class="block w-full mt-1" />
                                <x-input-error for="contact_number" />
                            </div>
                            <div>
                                <x-label for="company" value="Company" />
                                <x-input type="text" id="company" name="company"
                                    :value="old('company') ?? $employee->company"
                                    class="block w-full mt-1" />
                                <x-input-error for="company" />
                            </div>
                            <div>
                                <x-label for="job_title" value="Job Title" />
                                <x-input type="text" id="job_title"
                                    name="job_title"
                                    :value="old('job_title') ?? $employee->job_title"
                                    class="block w-full mt-1" />
                                <x-input-error for="job_title" />
                            </div>
                            <div>
                                <x-label for="salary_per_month"
                                    value="Salary per Month" />
                                <x-input type="text" id="salary_per_month"
                                    name="salary_per_month"
                                    :value="old('salary_per_month') ?? $employee->salary_per_month"
                                    class="block w-full mt-1" />
                                <x-input-error for="salary_per_month" />
                            </div>
                        </div>
                    </x-card-item>
                    <x-card-item class="relative">
                        <x-button type="submit">Update</x-button>
                    </x-card-item>
                </x-card>
            </form>
            <div class="absolute right-6 bottom-6">
                <form method="post"
                    action="{{ route('employees.destroy', ['employee' => $employee->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">Delete</button>
                </form>
            </div>
        </div>
    </x-page-content>
</x-app-layout>
