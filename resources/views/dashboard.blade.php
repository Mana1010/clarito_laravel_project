<x-app-layout>
<div class="flex flex-col py-3 px-5 h-full relative">
    <div class=" py-5">
    <h1 class="text-slate-900 font-semibold text-xl">Student Management</h1>
</div>

   @if(session('success'))
   <script>
    alert("{{session('success')}}")
</script>

   @endif
    <form  method="POST" action="{{route('student.store')}}" class="w-full shadow pt-7 px-3 flex flex-col space-y-5 py-6">
        @csrf
        <h1 class="text-slate-900 font-semibold text-lg text-start">Add New Student</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 w-full">
            <div class="flex flex-col space-y-1">
                <label for="name" class="text-sm font-bold text-slate-900">Full Name</label>
                <input required type="text" id="name" name="name" placeholder="@e.g John Doe" class="p-2 rounded-sm border border-black/10"/>
            </div>
            <div class="flex flex-col space-y-1">
                <label for="email" class="text-sm font-bold text-slate-900">Email</label>
                <input required type="email" id="email" name="email" placeholder="@e.g johndoe@gmail.com" class="p-2 rounded-sm border border-black/10"/>
            </div>
            <div class="flex flex-col space-y-1">
                <label for="phone" class="text-sm font-bold text-slate-900">Phone</label>
                <input required type="number" id="phone" name="phone" placeholder="@e.g +639*********" class="p-2 rounded-sm border border-black/10"/>
            </div>
            <div class="flex flex-col space-y-1">
                <label for="address" class="text-sm font-bold text-slate-900">Address  <span class="text-[0.65rem] text-red-400">(Street/Barangay/City/Province)</span></label>
                <input required type="text" id="address" name="address" placeholder="@eg Proper Cogon, Roxas, Capiz" class="p-2 rounded-sm border border-black/10"/>
            </div>
        </div>
        <button type="submit" class="md:w-1/4 w-full py-2 rounded-sm bg-slate-900 text-white font-bold mx-auto">ADD STUDENT</button>
    </form>
    <div class="pt-5">
    <h1 class="text-slate-900 font-semibold text-lg text-start">List of Students</h1>
    <table class="w-full border border-slate-900/50 pt-2">
        <thead>
        <tr>
            <th class="p-3 border border-slate-900/50">#</th>
            <th class="p-3 border border-slate-900/50">Name</th>
            <th class="p-3 border border-slate-900/50">Email</th>
            <th class="p-3 border border-slate-900/50">Phone No.</th>
            <th class="p-3 border border-slate-900/50">Address</th>
            <th class="p-3 border border-slate-900/50">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $key => $student)
            <tr class="text-center">
                <td class="p-3 border border-slate-900/50">{{$key + 1}}</td>
                <td class="p-3 border border-slate-900/50">{{$student->name}}</td>
                <td class="p-3 border border-slate-900/50">{{$student->email}}</td>
                <td class="p-3 border border-slate-900/50">{{$student->phone}}</td>
                <td class="p-3 border border-slate-900/50">{{$student->address}}</td>
                <td class="border border-slate-900/50">
                <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 12C9 11.5341 9 11.3011 9.07612 11.1173C9.17761 10.8723 9.37229 10.6776 9.61732 10.5761C9.80109 10.5 10.0341 10.5 10.5 10.5H13.5C13.9659 10.5 14.1989 10.5 14.3827 10.5761C14.6277 10.6776 14.8224 10.8723 14.9239 11.1173C15 11.3011 15 11.5341 15 12C15 12.4659 15 12.6989 14.9239 12.8827C14.8224 13.1277 14.6277 13.3224 14.3827 13.4239C14.1989 13.5 13.9659 13.5 13.5 13.5H10.5C10.0341 13.5 9.80109 13.5 9.61732 13.4239C9.37229 13.3224 9.17761 13.1277 9.07612 12.8827C9 12.6989 9 12.4659 9 12Z" stroke="#0F172A" stroke-width="1.5"></path> <path d="M20.5 7V13C20.5 16.7712 20.5 18.6569 19.3284 19.8284C18.1569 21 16.2712 21 12.5 21H11.5M3.5 7V13C3.5 16.7712 3.5 18.6569 4.67157 19.8284C5.37634 20.5332 6.3395 20.814 7.81608 20.9259" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round"></path> <path d="M12 3H4C3.05719 3 2.58579 3 2.29289 3.29289C2 3.58579 2 4.05719 2 5C2 5.94281 2 6.41421 2.29289 6.70711C2.58579 7 3.05719 7 4 7H20C20.9428 7 21.4142 7 21.7071 6.70711C22 6.41421 22 5.94281 22 5C22 4.05719 22 3.58579 21.7071 3.29289C21.4142 3 20.9428 3 20 3H16" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                    </button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</x-app-layout>
