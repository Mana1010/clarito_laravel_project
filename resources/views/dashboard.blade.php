<x-app-layout>
<div class="flex flex-col py-3 px-5 h-full">
    <h1 class="text-slate-900 font-semibold text-xl py-5">Student Management</h1>
    <form method="POST" action="{{route('student.store')}}" class="h-full w-full shadow pt-7 px-3 flex flex-col space-y-5">
        <h1 class="text-slate-900 font-semibold text-lg">Add New Student</h1>
        <div class="grid grid-cols-2 gap-3">
            <div class="flex flex-col space-y-1">
                <label for="name" class="text-sm font-bold text-slate-900">Full Name</label>
                <input required type="text" id="name" placeholder="@e.g John Doe" class="p-2 rounded-sm border border-black/10"/>
            </div>
            <div class="flex flex-col space-y-1">
                <label for="email" class="text-sm font-bold text-slate-900">Email</label>
                <input required type="email" id="email" placeholder="@e.g johndoe@gmail.com" class="p-2 rounded-sm border border-black/10"/>
            </div>
            <div class="flex flex-col space-y-1">
                <label for="phone" class="text-sm font-bold text-slate-900">Phone</label>
                <input required type="number" id="phone" placeholder="@e.g +639*********" class="p-2 rounded-sm border border-black/10"/>
            </div>
            <div class="flex flex-col space-y-1">
                <label for="address" class="text-sm font-bold text-slate-900">Address  <span class="text-[0.65rem] text-red-400">(Street/Barangay/City/Province)</span></label>
                <input required type="text" id="address" placeholder="@eg Proper Cogon, Roxas, Capiz" class="p-2 rounded-sm border border-black/10"/>
            </div>
        </div>
        <button type="submit" class="w-1/4 py-2 rounded-sm bg-slate-900 text-white font-bold">ADD STUDENT</button>
    </form>
</div>
</x-app-layout>
