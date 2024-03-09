<x-app-layout>
  
  
    <form action="/docket" method="POST" >
        @csrf        
        <div class="relative w-full flex flex-col items-center">  

            <div class="px-4 w-full max-w-[700px]">
                <div class="mt-10 grid grid-rows-1 gap-4 w-full ">    
                    <div class="relative">
                        <div class="w-full">
                            <h1 class=" w-full mb-5 text-4xl">Statement Pad</h1>
                        </div>
                    </div>
                    <!-- Officer -->
                    <div class="relative">
                        <x-text-input  id="date_time" class="block mt-1 w-full" type="datetime-local" name="date_time" required autocomplete="off" />
                        <x-input-label for="date_time"  :value="__('Date/Time')"  />
                        <x-input-error :messages="$errors->get('date_time')" class="mt-2 focus:ring-orange-500" />
                    </div>


 <div class="relative">
                        <x-text-input  id="no" class="block mt-1 w-full" type="text" name="no" required autocomplete="off" />
                        <x-input-label for="no"  :value="__('No')"  />
                        <x-input-error :messages="$errors->get('no')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    
                   


                   
                    

                    <div class="relative">
                        <x-text-input  id="occurrence" class="block mt-1 w-full" type="text" name="occurrence" required autocomplete="off" />
                        <x-input-label for="occurrence"  :value="__('Report')"  />
                        <x-input-error :messages="$errors->get('shift')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div class="relative">
                        <x-text-input  id="subject" class="block mt-1 w-full" type="text" name="subject" required autocomplete="off" />
                        <x-input-label for="subject"  :value="__('Refence Numbe')"  />
                        <x-input-error :messages="$errors->get('shift')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div class="relative">
                        <button type="submit" class="w-28 py-3 text-lg bg-orange-500 hover:bg-orange-600 rounded-md">Submit</button>
                    </div>

                    @if ($errors ->has ('occurrence'))
                        <div class="error text-danger">{{$errors->first('occurrence')}}</div>
                    @endif 
                </div>
    
            </div>    
        </div>
        
    </form>
</x-app-layout>

