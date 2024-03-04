<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>To Do List</title>
  @vite('resources/css/app.css')
</head>

<body>
  {{-- navbar --}}
  <div class="navbar bg-base-100">
    <div class="navbar-start">
    </div>
    <div class="navbar-center">
      <a href="/" class="btn btn-ghost text-xl hover:bg-transparent">To Do List</a>
    </div>
    <div class="navbar-end">
    </div>
  </div>
  {{-- akhir navbar --}}

  {{-- content --}}
  <div class="flex justify-center my-10 flex-col gap-10">
    {{-- search bar --}}
    <label class="form-control w-full max-w-lg mx-auto">
      <div class="label">
        <span class="label-text text-emerald-600">Task Baru</span>
      </div>
      <input type="text" placeholder="Type here" class="input input-bordered input-success w-full max-w-lg" />
      <div class="label">
      </div>
      {{-- button add --}}
      <button class="btn btn-success w-36 self-center">Add</button>
      {{-- akhir button add --}}
    </label>
    {{-- akhir search bar --}}

    {{-- task --}}
    <div class="flex flex-col gap-3">
      <div role="alert" class="alert max-w-4xl mx-auto">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>Task 1</span>
        <div>
          <button class="btn btn-sm">Edit</button>
          <button class="btn btn-sm btn-success">Done</button>
        </div>
      </div>
      {{-- akhir task --}}
      {{-- task --}}
      <div role="alert" class="alert max-w-4xl mx-auto">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>Task 2</span>
        <div>
          <button class="btn btn-sm">Edit</button>
          <button class="btn btn-sm btn-success">Done</button>
        </div>
      </div>
      {{-- akhir task --}}
    </div>
  </div>
  {{-- akhir content --}}
</body>

</html>