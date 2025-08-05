<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if(session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form id="contactForm" action="{{ route('contactInfo.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="flex flex-wrap gap-4 mt-4">
                            <div class="w-full md:w-1/2">
                                <label for="name_title" class="block text-sm font-medium text-gray-700">Name Title</label>
                                <input type="text" name="contact[name_title]" id="name_title"
                                       value="{{ old('contact.name_title', $contact['name_title'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="contact[name]" id="name"
                                       value="{{ old('contact.name', $contact['name'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mt-4">
                            <div class="w-full md:w-1/2">
                                <label for="skill_title" class="block text-sm font-medium text-gray-700">Skill Title</label>
                                <input type="text" name="contact[skill_title]" id="skill_title"
                                       value="{{ old('contact.skill_title', $contact['skill_title'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="profession" class="block text-sm font-medium text-gray-700">Profession</label>
                                <input type="text" name="contact[profession]" id="profession"
                                       value="{{ old('contact.profession', $contact['profession'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                        </div>

                       

                        <div class="flex flex-wrap gap-4 mt-4">
                            <div class="w-full">
                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                <input type="text" name="contact[address]" id="address"
                                       value="{{ old('contact.address', $contact['address'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mt-4">
                            <div class="w-full md:w-1/2">
                                <label for="address_title" class="block text-sm font-medium text-gray-700">Address Title</label>
                                <input type="text" name="contact[address_title]" id="address_title"
                                       value="{{ old('contact.address_title', $contact['address_title'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="contact[email]" id="email"
                                       value="{{ old('contact.email', $contact['email'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="email_title" class="block text-sm font-medium text-gray-700">Email Title</label>
                                <input type="text" name="contact[email_title]" id="email_title"
                                       value="{{ old('contact.email_title', $contact['email_title'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mt-4">
                            <div class="w-full md:w-1/2">
                                <label for="phone_title" class="block text-sm font-medium text-gray-700">Phone Title</label>
                                <input type="text" name="contact[phone_title2]" id="phone_title2"
                                       value="{{ old('contact.phone_title2', $contact['phone_title2'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="phone_number2" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <input type="text" name="contact[phone_number2]" id="phone_number2"
                                       value="{{ old('contact.phone_number2', $contact['phone_number2'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mt-4">
                            <div class="w-full md:w-1/2">
                                <label for="social_link_title" class="block text-sm font-medium text-gray-700">Social Link Title</label>
                                <input type="text" name="contact[social_link_title]" id="social_link_title"
                                       value="{{ old('contact.social_link_title', $contact['social_link_title'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="resume_title" class="block text-sm font-medium text-gray-700">Resume Title</label>
                                <input type="text" name="contact[resume_title]" id="resume_title"
                                       value="{{ old('contact.resume_title', $contact['resume_title'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                              
                            <div class="w-full md:w-1/2">
                                <label for="resume_file" class="block text-sm font-medium text-gray-700">Resume</label>
                                <input type="file" name="resume_file" id="resume_file"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005] p-1">
                                @if(!empty($contact['resume']))
                                    <a href="{{ asset( $contact['resume']) }}" target="_blank" class="text-blue-600 underline mt-1 block">
                                        View uploaded resume
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mt-4">
                            <div class="w-full md:w-1/2">
                                <label for="github_username" class="block text-sm font-medium text-gray-700">Github Username</label>
                                <input type="text" name="contact[github_username]" id="github_username"
                                       value="{{ old('contact.github_username', $contact['github_username'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="github_link" class="block text-sm font-medium text-gray-700">Github Link</label>
                                <input type="text" name="contact[github_link]" id="github_link"
                                       value="{{ old('contact.github_link', $contact['github_link'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mt-4">
                            <div class="w-full md:w-1/2">
                                <label for="linkedin_username" class="block text-sm font-medium text-gray-700">LinkedIn Username</label>
                                <input type="text" name="contact[linkedin_username]" id="linkedin_username"
                                       value="{{ old('contact.linkedin_username', $contact['linkedin_username'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="linkedin_link" class="block text-sm font-medium text-gray-700">LinkedIn Link</label>
                                <input type="text" name="contact[linkedin_link]" id="linkedin_link"
                                       value="{{ old('contact.linkedin_link', $contact['linkedin_link'] ?? '') }}"
                                       class="w-full border-gray-300 rounded mt-1 bg-[#00000005]">
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">
                            <button type="submit" class="px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 ">
                                Save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
