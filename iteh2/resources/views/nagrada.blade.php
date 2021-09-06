<x-app-layout>
    <x-slot name="header">
        <h2 class="font semibold text-xl text-gray-800 leading-tight">
        {{__('Nagrade')}}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-6">Nagrade</div>
    <a href="/dashboard" class="border-b hover:bg-orange-100" style="margin-left:150px;font-size:25px ; background-color: pink ; border-radius:7px">Recepti</a>
    <a href="/dodaj" class="border-b hover:bg-orange-100" style="margin-left:150px ; font-size:25px ; background-color: blue ; border-radius:6px">Nova nagrada</a>
               
            </div>
            <table class="" style="margin-left:150px">
                <thead>
                <tr class="border-b" >
                    <th style="margin-left:0px ; background-color: yellow" ></th>
                    <th style="margin-left:0px ; background-color: #C1A7EB">Nagrade</th>
                </tr>
                </thead>
               
                <tr class="border-b hover:bg-orange-100">
                <td class="p-3 px-5">
                        
                        </td>
                       
                        <td class="p-3 px-5">
                       
                        
                            
            <form action="/nagrada" class="inline-block">
            <a href="/nagrada/id" name="izmeni" 
        style="margin-left:450px ; background-color: yellow ; border-radius:40px ; font-size:20px" >Izmeni</a>
<button type="submit" name="obrisiNagradu" formmethod="POST" style=" background-color: red ; border-radius:40px ; font-size:20px" >Obrisi</button>

                                <div style="margin-left:700px">
                              
</div>
                            </form >
                        </td>
                       
                    </tr>
                  
            </table>
            
        </div>
    </div>
</div>

</x-app-layout>