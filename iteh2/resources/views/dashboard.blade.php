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
                <div class="flex-auto text-2xl mb-6">RECEPTI</div>
                
                <div class="flex-auto text-right mt-3">
         <a href="/recept" class="border-b hover:bg-orange-100" style="margin-left:150px ; font-size:25px ; background-color: pink ; border-radius:6px">Novi recept</a>
         <a href="/api/nagrada" class="border-b hover:bg-orange-100" style="margin-left:150px ; font-size:25px ; background-color: pink ; border-radius:6px">Nagrade</a>
                  
        </div>
            </div>
            <table class="" style="margin-left:150px">
                <thead>
                <tr class="border-b" >
                    <th style="margin-left:0px ; background-color: yellow" ></th>
                    <th style="margin-left:0px ; background-color: #C1A7EB">Recept</th>
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
                                <div style="margin-left:700px">
                                Objavio/la:
                            {{auth()->user()->name}}
</div>
                            </form > <!--Objavio/la:
                            {{auth()->user()->name}}-->
                        </td>
                       
                    </tr>
                @endforeach
            </table>
            
        </div>
    </div>
</div>

</x-app-layout>
