<x-layout>
    <x-slot:heading>
        SETTINGS PAGE
    </x-slot:heading>

    <div class="flex justify-center mt-4">
        <a href="#explore" class="animate-bounce text-black font-bold text-lg">
            <h7> <strong><i> WELCOME TO SETTINGS PAGE </i></strong></h7>
        </a>
    </div>

    <div class="ml-3">
        <br><div class="text-base/5 font-medium text-gray-800"><strong>PLEASE INPUT RELEVANT INFORMATION</strong></div><br>

    <div class="mt-8 max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Update Profile Settings</h3>
        <table class="w-full">
            <tbody>
                <tr class="border-b border-gray-200">
                    <td class="py-3 pr-4 text-sm font-medium text-gray-700 w-1/3">Name:</td>
                    <td class="py-3">
                        <input type="text" name="name" placeholder="Enter new name"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                    </td>
                </tr>
                <tr>
                    <td class="py-3 pr-4 text-sm font-medium text-gray-700 w-1/3">Password:</td>
                    <td class="py-3">
                        <input type="password" name="password" placeholder="Enter new password"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="mt-6 text-right">
            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                Save Changes
            </button>
        </div>
    </div>

    <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-800 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
        <span class="absolute -inset-1.5"></span>
        <span class="sr-only">View notifications</span>
    </button>
</x-layout>
