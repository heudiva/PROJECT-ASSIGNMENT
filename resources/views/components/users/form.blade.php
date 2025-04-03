<div class="col-span-6 sm:col-span-3">
    <input type="hidden" id="id" name="id">
    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
    <input type="text" name="username" id="username" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="greenbonnie">
</div>
<div class="col-span-6 sm:col-span-3">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Display Name</label>
    <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Green Bonnie">
</div>
<div class="col-span-6 sm:col-span-3">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
    <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="example@company.com" >
</div>
{{-- <div class="col-span-6 sm:col-span-3">
    <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
    <input type="text" name="position" id="usertype" class="shadow-sm capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. React developer" >
</div> --}}


<div class="col-span-6 sm:col-span-3">
    <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
    <select id="usertype" name="usertype" class="bg-gray-50 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        <option value="" selected>-- select position --</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
        <option value="officer">Officer</option>
    </select>
    
</div>