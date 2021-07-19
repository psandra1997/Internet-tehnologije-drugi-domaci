<x-app-layout>
    <x-slot name="header">
        <h2 class="font semibold text-xl text-gray-800 leading-tight">
            {{__('Edit Recept')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form action="/recept/{{$recept->id}}" method="POST">
                    <div class="form-group">
                        <textarea name="opisRecepta"   placeholder='Unesite recept'></textarea>  
                        @if ($errors->has('opisRecepta'))
                            <span class="text-danger">{{ $errors->first('opisRecepta') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit">Uredi Recept</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>    
        
        </div>
    
    </div>

</x-app-layout>