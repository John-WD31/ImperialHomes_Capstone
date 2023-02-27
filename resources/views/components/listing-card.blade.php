@props(['listing'])
{{-- @vite('resources/css/app.css') --}}
    @vite('resources/js/app.js')

    <script
      src="https://kit.fontawesome.com/782572ab2b.js"
      crossorigin="anonymous"
    ></script>

  <x-card>
        <section class="card">
          <div class="rounded-lg shadow-lg bg-white mx-2 mt-10">
    
            <img
              class="rounded-t-lg w-full h-60"
              src="{{$listing->file ? asset('storage/' . $listing->file) : asset('images/no-image.png')}}"
              alt=""
            />
         
          <div class="p-6">
            
            <h5 class="text-2xl text-amber-500 font-medium mb-2">{{$listing->propertyName}}</h5>
            
    
            <div class="text-lg font-thin my-4 flex items-center text-white rounded-xl py-1 bg-cyan-700 px-3 mr-2">
              <i class="fa-solid fa-location-dot text-white mr-2"></i> {{$listing->location}}
              </div>
    
            <div class="flex items-center gap-1 mb-2">
              <p class="flex items-center justify-center border-2 border-cyan-600 text-black rounded-xl py-1 px-3 mr-2 text-xs">
                {{$listing->propertyType}}
            </p>
            <p class="flex items-center justify-center border-2 border-cyan-600 text-black rounded-xl py-1 px-3 mr-2 text-xs">{{$listing->model}}</p>
            </div>
            
            <div class="flex items-center gap-1">
               <div class="flex items-center justify-center border-2 border-cyan-600 text-black rounded-xl py-1 px-3 mr-2 text-xs">
                <span>Php </span>
                 {{$listing->price}}
               </div>
               <div>
                <x-listing-tags :tagsCsv="$listing-> tags"/>
               </div>
            </div>  
            
                <br />
                <button
                type="button"
                class="inline-block px-6 py-2.5 border-2 border-cyan-600 text-cyan-600
                hover:text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-cyan-700 hover:shadow-lg focus:bg-cyan-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-cyan-800 active:shadow-lg transition duration-150 ease-in-out"
              >
                <a href="/contact">Buy Me</a>
              </button>
              <button class="inline-block px-6 py-2.5 border-2 border-cyan-600  font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-cyan-700 hover:shadow-lg focus:bg-cyan-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-cyan-800 active:shadow-lg transition duration-150 ease-in-out">
                <a href="/listings/{{$listing->id}}"><i class="fa-solid fa-eye text-cyan-600 hover:text-white fa-xl"></i></a>
              </button>
            
          </div>
        </div>
        </section>
  
    
</x-card>