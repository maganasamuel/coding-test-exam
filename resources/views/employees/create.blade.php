<x-app-layout>
    <x-slot name="header">
        <x-page-title>Create New Employee</x-page-title>
    </x-slot>

    <x-page-content>
        <form method="post" action="{{ route('employees.store') }}">
            @csrf
            <x-card>
                <x-card-item>
                    <div class="space-y-4">
                        <div>
                            <x-label for="first_name" value="First Name" />
                            <x-input type="text" id="first_name"
                                name="first_name"
                                :value="old('first_name')"
                                class="block w-full mt-1" />
                            <x-input-error for="first_name" />
                        </div>
                        <div>
                            <x-label for="middle_name" value="Middle Name" />
                            <x-input type="text" id="middle_name"
                                name="middle_name"
                                :value="old('middle_name')"
                                class="block w-full mt-1" />
                            <x-input-error for="middle_name" />
                        </div>
                        <div>
                            <x-label for="last_name" value="Last Name" />
                            <x-input type="text" id="last_name" name="last_name"
                                :value="old('last_name')"
                                class="block w-full mt-1" />
                            <x-input-error for="last_name" />
                        </div>
                        <div>
                            <x-label for="gender" value="Gender" />
                            <div class="space-x-6 mt-1">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio"
                                        name="gender" value="0"
                                        {{ old('gender') == 0 ? 'checked' : '' }}>
                                    <span class="ml-2">Male</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio"
                                        name="gender" value="1"
                                        {{ old('gender') == 1 ? 'checked' : '' }}>
                                    <span class="ml-2">Female</span>
                                </label>
                            </div>
                            <x-input-error for="gender" />
                        </div>
                        <div>
                            <x-label for="birth_date" value="Date of Birth" />
                            <x-input type="date" id="birth_date"
                                name="birth_date"
                                :value="old('birth_date')"
                                class="block w-full mt-1" />
                            <x-input-error for="birth_date" />
                        </div>
                        <div>
                            <x-label for="address" value="Address" />
                            <x-input type="text" id="address" name="address"
                                :value="old('address')"
                                class="block w-full mt-1" />
                            <x-input-error for="address" />
                        </div>
                        <div>
                            <x-label for="contact_number"
                                value="Contact Number" />
                            <x-input type="text" id="contact_number"
                                name="contact_number"
                                :value="old('contact_number')"
                                class="block w-full mt-1" />
                            <x-input-error for="contact_number" />
                        </div>
                        <div>
                            <x-label for="company" value="Company" />
                            <x-input type="text" id="company" name="company"
                                :value="old('company')"
                                class="block w-full mt-1" />
                            <x-input-error for="company" />
                        </div>
                        <div>
                            <x-label for="job_title" value="Job Title" />
                            <x-input type="text" id="job_title" name="job_title"
                                :value="old('job_title')"
                                class="block w-full mt-1" />
                            <x-input-error for="job_title" />
                        </div>
                        <div>
                            <x-label for="salary_per_month"
                                value="Salary per Month" />
                            <x-input type="text" id="salary_per_month"
                                name="salary_per_month"
                                :value="old('salary_per_month')"
                                class="block w-full mt-1" />
                            <x-input-error for="salary_per_month" />
                        </div>
                    </div>
                </x-card-item>
                <x-card-item>
                    <x-button type="submit">Create</x-button>
                </x-card-item>
            </x-card>
        </form>
    </x-page-content>
</x-app-layout>
