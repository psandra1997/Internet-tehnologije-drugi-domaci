<x-app-layout>
    <x-slot name="header">
        <h2 class="font semibold text-xl text-gray-800 leading-tight">
        {{__('Dashboard')}}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-4">RECEPTI</div>
                
                <div class="flex-auto text-right mt-2">
         <a href="/recept" class="border-b hover:bg-orange-100" style="margin-left:450px ; font-size:20px ; background-color: pink ; border-radius:30px">Novi recept</a>
                </div>
            </div>
            <table class="w-full text-md rounded mb-4">
                <thead>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Recept</th>
                    <th class="text-left p-3 px-5">Izmeni/Obrisi</th>
                    <!--th class="text-left p-3 px-5">Recept je objavio/la:</th-->
                    <th></th>
                </tr>
                </thead>
                
                @foreach(auth()->user()->recepts as $recept)
                <tr class="border-b hover:bg-orange-100">
                <td class="p-3 px-5">
                        
                        </td>
                       
                        <td class="p-3 px-5">
                        {{$recept->opisRecepta}}
                            
                            <form action="/recept/{{$recept->id}}" class="inline-block">
                            <a href="/recept/{{$recept->id}}" name="edit" 
                    style="margin-left:450px ; background-color: yellow ; border-radius:40px ; font-size:20px" >Izmeni</a>
                                <button type="submit" name="delete" formmethod="POST" style=" background-color: red ; border-radius:40px ; font-size:20px" >Obrisi</button>
                                {{ csrf_field() }}
                                
                               
                              
                            </form > Objavio/la:
                            {{auth()->user()->name}}
                        </td>
                       
                    </tr>
                @endforeach
            </table>
            
        </div>
    </div>
</div>

</x-app-layout>
