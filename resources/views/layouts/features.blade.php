<div>
    <div class="grid grid-cols-1 grid-rows-1 float-right">
      <div class="flex flex-col lg:flex-row gap-6">
        @foreach ($blogs as $blog)
        <div class="bg-[#F9F9F9] pb-5 pr-5">      
          <div> 
            <img src="{{ asset($blog->image) }}" alt="{{ asset($blog->image) }}">
          </div>
          <div>
            <h1 class="text-2xl font-bold mt-8 ml-5">{{$blog->title}}</h1>
            <p class="text-sm mt-2 ml-5 max-w-[200px]">{{ $blog->content }}</p>
            <p class="text-sm text-[#33B8C8] mt-2 ml-5"> Read more </p>
          </div>
        </div>
        @endforeach
        